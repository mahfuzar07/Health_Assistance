<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth:admin');
    }


    public function Addproduct(){

    	
   	    return view('admin.product.add');
   }

   public function Viewproduct(){

    	
   	    return view('admin.product.view');
   }

}
