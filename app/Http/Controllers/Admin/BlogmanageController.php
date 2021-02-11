<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogcategory;
use App\Blog;

class BlogmanageController extends Controller
{
     public function __construct(){
    
        $this->middleware('auth:admin');
    }

    public function index(){
    	$blogs = Blog::latest()-> get();
    	$blogcategories = Blogcategory::latest()-> get();
   	    return view('admin.blogmanage',compact('blogs','blogcategories'));
   }
    public function Postview($post_id){
    	$blogs = Blog::findOrfail($post_id);
    	$blogcategories = Blogcategory::latest()-> get();
   	    return view('admin.blogview',compact('blogs','blogcategories'));
   }


    public function Delete($post_id){

      Blog::findOrFail($post_id)->delete();
      
        return Redirect() -> back();
   }


   public function Inactive($post_id){

          Blog::find($post_id)->update(['status' => 0]);
          return Redirect() -> back();
            
       } 



   public function Active($post_id){

          Blog::find($post_id)->update(['status' => 1]);
          return Redirect() -> back();
            
       } 
}
