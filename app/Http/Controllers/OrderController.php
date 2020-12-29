<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Order;
use Carbon\Carbon;
use App\Cart;
use App\Shipping;
use App\OrderItem;



class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
    	$request-> validate([
           
           'full_name' =>'required',
           'email' =>'required',
           'address' =>'required',
           'city' =>'required',
           'state' =>'required',
           'post_code' =>'required',
           'phone' =>'required',
         ]);

         $order_id = Order::insertGetId([
         	'user_id' => Auth::id(),
         	'invoice_no' => mt_rand(100,999),
         	'payment_type' =>$request->payment_type,
         	'subtotal' =>$request->subtotal,
         	'discount' =>$request->discount,
         	'total' => $request->total,
         	'created_at' => Carbon::now(),

         ]);


         $carts = Cart::where('user_ip',request()->ip())->latest()-> get();

         foreach ($carts as $cart ) {
         	OrderItem::insert([
         	   'order_id'=>$order_id,	
         	   'product_id'=>$cart->product_id,	
         	   'product_name'=>$cart->product->product_name,	
         	   'product_qty'=>$cart->qty,	
         	   'created_at' => Carbon::now(),
               ]);
       
         }
         shipping::insert([
         	'order_id' =>$order_id,
         	'full_name' => $request->full_name,
         	'email' => $request->email,
         	'phone' => $request->phone,
         	'address' =>$request->address,
         	'city' => $request->city,
         	'state' => $request->state,
         	'post_code' =>$request->post_code,
         	'order_note' =>$request->order_note,
         	'created_at' =>Carbon::now(),

         ]);

         if (Session::has('coupon')) {
          Session()->forget('coupon');
          
        }
        Cart::where('user_ip',request()->ip())->delete();


        return Redirect() -> to('order/success')->with('OrderComplete','Your Order Successfully  Place ');



    }

      public function orderSuccess()
    {

        return view('pages.order-success');
        }

}

