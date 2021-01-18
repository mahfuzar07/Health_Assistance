<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Consultant;
use Carbon\Carbon;



class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $products = Product::where('status',1)-> latest()-> get();
        $lts_p = Product::where('status',1)-> latest()->limit(3)-> get();
        $categories = Category::where('status',1)-> latest()-> get();
        $consultants = Consultant::where('status',0)->latest()-> get();
        return view('home',compact('products','categories','lts_p','consultants'));

    }
    //product details page
      public function productDetail($product_id)

    {
        $product =Product::findOrFail($product_id);
        $category_id = $product->category_id;
        $related_p = Product::where('category_id',$category_id)-> latest()-> get();
        return view('pages.pdetails',compact('product','related_p'));

    }
    //shop page 
    public function shop()


    {
        $products = Product::where('status',1)-> latest()-> get();
        $productsp = Product::where('status',1)-> latest()-> paginate(12);
        $lts_p = Product::where('status',1)-> latest()->limit(3)-> get();
        $categories = Category::where('status',1)-> latest()-> get();
        return view('pages.shop',compact('products','categories','lts_p','productsp'));
        
       

    }
    
//gategorywise product show
    public function catWp($row_id){
        
        $products = Product::where('category_id', $row_id)-> where('status',1)-> latest()-> paginate(12);
        $lts_p = Product::where('status',1)-> latest()->limit(3)-> get();
        $categories = Category::where('status',1)-> latest()-> get();

        return view('pages.catw', compact('products','categories','lts_p'));
        
       

    }
}
