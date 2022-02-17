<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function place_order(Request $request)
    {
        $request->validate([
            'payment_type' => 'required',
        ]);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'invoice_no' => mt_rand(10000000, 99999999),
            'payment_type' => $request->payment_type,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'discount_percentage' => $request->discount_percentage,
            'created_at' => Carbon::now(),
        ]);


        $carts = Cart::where('user_id', Auth::id())->where('user_ip', request()->ip())->latest()->get();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->product_id,
                'product_qty' => $cart->qty,
                'created_at' => Carbon::now(),
            ]);

            /*stock or outOfStock */
            $prod = Product::where('id', $cart->product_id)->first();
            $prod->product_quantity = $prod->product_quantity - $cart->qty;
            $prod->update();
        }


        Shipping::insert([
            'order_id' => $order_id,
            'shipping_name' => $request->shipping_name,
            'shipping_email' => $request->shipping_email,
            'shipping_phone' => $request->shipping_phone,
            'address' => $request->address,
            'state' => $request->state,
            'post_code' => $request->post_code,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        if (Session::has('discount')) {
            session()->forget('discount');
        }

        Cart::where('user_id', Auth::id())->where('user_ip', request()->ip())->delete();
        return Redirect()->to('/')->with('status', 'Your order successfully done. We will contact as soon as possible, Thank you.');
    }
}
