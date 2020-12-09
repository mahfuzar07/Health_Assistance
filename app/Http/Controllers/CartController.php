<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Coupon;


class CartController extends Controller
{



   
   public function addToCart(Request $request,$product_id)
    {   
        $check = Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();

        if ($check) {
            Cart::where('product_id', $product_id)->where('user_ip',request()->ip())->increment('qty');
            return Redirect() -> back()->with('success','Product Added on your Cart');
        }

        else{
            Cart::insert([
           'product_id' => $product_id,
           'qty' => 1,
           'price' => $request->price,
           'user_ip' => request()->ip()
  
        ]);
          return Redirect() -> back()->with('success','Product Added on your Cart');


        }

        
    }


    public function Cartpage()
    {
        $carts = Cart::where('user_ip',request()->ip())->latest()-> get();
        $subtotal =Cart::all()->where('user_ip',request()->ip()) 
                            ->sum(function($t){
                                return $t->price * $t->qty;
                            });

        return view('pages.cart',compact('carts','subtotal'));
    }


    //=================cart Remove===============

     public function Remove($cart_id)
    {
        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();

       return Redirect() -> back()->with('cart_delete','Product Remove on your Cart');
    }



      //=================cart update===============

    public function qtyUpdate(Request $request , $cart_id)
    {
        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
         'qty' => $request->qty,
        ]);
        

       return Redirect() -> back()->with('qty_update','Quantity Updated on your Cart');
    }

 //=================coupon apply===============
    public function applyCoupon(Request $request)
    {
        $check = Coupon::where('coupon_code',$request->coupon_code)->first();
        if ($check) {
          Session::put('coupon',[
           'coupon_code'=> $check->coupon_code,
           'discount'=> $check->discount,
          ]);
          return Redirect() -> back()->with('coupon_apply','Coupon apply Successfull');
        }
        else{
         return Redirect() -> back()->with('coupon_invalid','This Coupon is Invalid');
        }

       
    }

}