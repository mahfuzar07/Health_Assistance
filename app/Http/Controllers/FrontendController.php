<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FrontendController extends Controller
{
    

    public function index()
    {
    	$products = Product::where('status',1)-> latest()-> get();
        $lts_p = Product::where('status',1)-> latest()->limit(3)-> get();

        
        $categories = Category::where('status',1)-> latest()-> get();
        return view('pages.index',compact('products','categories','lts_p'));
    }

     
}
