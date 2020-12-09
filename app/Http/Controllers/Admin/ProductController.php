<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth:admin');
    }


    public function Addproduct(){

      $categories = Category::latest()-> get();
    	
   	    return view('admin.product.add',compact('categories'));
   }


    public function Storeproduct(Request $request){

        
        $request-> validate([
           
           'category_id' =>'required|max:255',
           'product_name' =>'required|max:255',
           
           'product_code' =>'required|max:255',
           'product_quantity' =>'required|max:255',
           'price' =>'required|max:255',
           'short_description' =>'required',
           'description' =>'required',
           'image_1' =>'required|mimes:jpg,jpeg,png,gif',
           'image_2' =>'required|mimes:jpg,jpeg,png,gif',
           'image_3' =>'required|mimes:jpg,jpeg,png,gif',
           
           

        ],[
                'category_id.required'=>'Select Category Name',

        ]);

        $image_1 = $request->file('image_1');
        $name_gen = hexdec(uniqid()).'.'.$image_1->getClientOriginalExtension();
        Image::make($image_1)->resize(270,270)->save('frontend/img/product/'.$name_gen);
        $img_url1 = 'frontend/img/product/'.$name_gen;

        $image_2 = $request->file('image_2');
        $name_gen = hexdec(uniqid()).'.'.$image_2->getClientOriginalExtension();
        Image::make($image_2)->resize(270,270)->save('frontend/img/product/'.$name_gen);
        $img_url2 = 'frontend/img/product/'.$name_gen;

        $image_3 = $request->file('image_3');
        $name_gen = hexdec(uniqid()).'.'.$image_3->getClientOriginalExtension();
        Image::make($image_3)->resize(270,270)->save('frontend/img/product/'.$name_gen);
        $img_url3 = 'frontend/img/product/'.$name_gen;



        Product::insert([

        'category_id'=> $request-> category_id,
        'product_name'=> $request-> product_name,
        'product_slug'=> strtolower(str_replace('','-',$request->product_name)),
        'product_code'=> $request-> product_code,
        'product_quantity'=> $request-> product_quantity,
        'price'=> $request-> price,
        'short_description'=> $request-> short_description,
        'description'=> $request-> description,
        'image_1'=> $img_url1,
        'image_2'=> $img_url2,
        'image_3'=> $img_url3,
        'created_at' => Carbon::now()

        ]);

        return Redirect() -> back();
   }


   public function Viewproduct(){

    	$products= Product::orderBy('id','DESC')->get();
   	    return view('admin.product.view',compact('products'));
   }


   public function Editproduct($product_id){

      $product= Product::findOrFail($product_id);
      $categories = Category::latest()-> get();
        return view('admin.product.edit',compact('product','categories'));
   }
 

 public function Updateproduct(Request $request){

      $product_id = $request-> id;

      Product::findOrFail($product_id)->Update([

        'category_id'=> $request-> category_id,
        'product_name'=> $request-> product_name,
        'product_slug'=> strtolower(str_replace('','-',$request->product_name)),
        'product_code'=> $request-> product_code,
        'product_quantity'=> $request-> product_quantity,
        'price'=> $request-> price,
        'short_description'=> $request-> short_description,
        'description'=> $request-> description,
        
        'update_at' => Carbon::now()



      ]);
      
        return Redirect() -> route('view-product');
   }


   public function Delete($product_id){

      Product::findOrFail($product_id)->delete();
      
        return Redirect() -> back();
   }




public function Inactive($product_id){

          Product::find($product_id)->update(['status' => 0]);
          return Redirect() -> back();
            
       } 



   public function Active($product_id){

          Product::find($product_id)->update(['status' => 1]);
          return Redirect() -> back();
            
       } 



}
