<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function uProfile()

    {    
        
        return view('user.uprofile');

    }
    public function uOrders()

    {
        $orders = Order::latest()-> get();
        return view('user.uorders',compact('orders'));

    }

    public function ordersView($order_id)

    {
        $order = Order::findOrfail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();

        return view('user.ordersview', compact('order','orderItems','shipping'));

    }


}
