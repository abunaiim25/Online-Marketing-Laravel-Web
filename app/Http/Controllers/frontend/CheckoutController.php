<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::id())->latest()->get();
            $subtotal = Cart::all()->where('user_id', Auth::id())->where('user_ip', request()->ip())->sum(function ($t) {
                return $t->price * $t->qty;
            });
            return view('frontend.checkout', compact('carts', 'subtotal'));
        } else {
            return redirect()->route('login');
        }
    }
}
