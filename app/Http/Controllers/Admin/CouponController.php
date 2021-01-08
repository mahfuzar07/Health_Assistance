<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coupon;
use Carbon\Carbon;

class CouponController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth:admin');
    }

    public function index(){

    	$coupons = Coupon::latest()-> get();
   	    return view('admin.coupon.index' ,compact('coupons'));
   }


   public function storecpn(Request $request){
   	    $request-> validate([
           
           'coupon_code' =>'required|unique:coupons,coupon_code',
           'discount' =>'required',

   	    ]);

   	    Coupon::insert([
        'coupon_code'=>$request-> coupon_code,
        'discount' =>$request-> discount,
        'created_at'=> Carbon::now()

   	    ]);
   	    return Redirect() -> back();
   }



//category Edit data

  public function Edit($cpn_id){

        $coupon = Coupon::find($cpn_id);
          return view('admin.coupon.edit',compact('coupon'));
     } 


     public function Updatecpn(Request $request){
        $cpn_id = $request->id;

        Coupon::find($cpn_id)->update([
        'coupon_code'=> $request-> coupon_code,
        'discount'=> $request-> discount,
        'updated_at' => Carbon::now()

        ]);
        return Redirect() -> route('admin.coupon');
   }

   public function Delete($cpn_id){

        Coupon::find($cpn_id)->delete();
        return Redirect() -> back();
          
     } 
//category status


  public function Inactive($cpn_id){

          Coupon::find($cpn_id)->update(['status' => 0]);
          return Redirect() -> back();
            
       } 



   public function Active($cpn_id){

          Coupon::find($cpn_id)->update(['status' => 1]);
          return Redirect() -> back();
            
       } 
}

