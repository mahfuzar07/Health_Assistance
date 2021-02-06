<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blogcategory;
use Carbon\Carbon;

class BlogcategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:consultant');
    }

    public function index(){
    	$blogcategories = Blogcategory::latest()-> get();
    return view('consultant.blog_category.add',compact('blogcategories'));
   }



   public function storecat(Request $request){
   	    $request-> validate([
           
           'category_name' =>'required|unique:blogcategories,category_name',
           'category_description' =>'required'

   	    ]);

   	    Blogcategory::insertGetId([
   	    'user_id' => Auth::id(),
        'category_name'=> $request-> category_name,
        'category_description'=> $request-> category_description,

        'created_at' => Carbon::now()

   	    ]);
   	    return Redirect() -> back();
   }


    public function Edit($cat_id){

        $category = Blogcategory::find($cat_id);
          return view('consultant.blog_category.edit',compact('category'));
     } 


     public function UpdateCat(Request $request){
        $cat_id = $request->id;

        Blogcategory::find($cat_id)->update([
        'category_name'=> $request-> category_name,
        'category_description'=> $request-> category_description,
        'updated_at' => Carbon::now()

        ]);
        return Redirect() -> route('consultant.category') -> with('update','category Updated');
   }

   public function Delete($cat_id){

        Blogcategory::find($cat_id)->delete();
        return Redirect() -> back() ;
          
     } 
}
