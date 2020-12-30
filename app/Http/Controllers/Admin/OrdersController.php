<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coupon;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;



class OrdersController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth:admin');
    }

    public function index(){

    	$orders = Order::latest()-> get();
   	    return view('admin.orders.index',compact('orders'));
   }

   public function viewOrders($order_id){

    	$order = Order::findOrfail($order_id);
    	$orderItems = OrderItem::where('order_id',$order_id)->get();
    	$shipping = Shipping::where('order_id',$order_id)->first();

       return view('admin.orders.view', compact('order','orderItems','shipping'));
   }
}
