<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use Illuminate\Http\Request;

class OrderadminController extends Controller
{
    public function admin_orders_view($id){
        $order = Order::findOrFail($id);
        $orderItems = OrderItem::where('order_id',$id)->get();
        $shipping = Shipping::where('order_id',$id)->first();
        return view('admin.order.order_view',compact('order','orderItems','shipping'));
    }

    
    public function update_order_status(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('/home')->with('status',"Order Status Updated Successfully");
    }

    public function order_status_history()
    {
        $orders = Order::where('status',1)->paginate(10);
     return view('admin.order.history_order',compact("orders"));
    }

    public function admin_orders_delete($id){
        Order::findOrFail($id)->delete();
           return Redirect()->back()->with('delete','Order Deleted');
       }
    
}
