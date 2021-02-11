<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blogcategory;
use App\Blog;
use Image;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:consultant');
    }

    public function index(){
    	$blogcategories = Blogcategory::latest()-> get();
    return view('consultant.post.add',compact('blogcategories'));
   }

    public function Storepost(Request $request){

        
        $request-> validate([
           
           'blogcategory_id' =>'required|max:255',
           'post_title' =>'required|max:255',
           'short' =>'required',
           'post_body' =>'required',
           'image' =>'required|mimes:jpg,jpeg,png,gif',
           
           
           

        ],[
                'blogcategory_id.required'=>'Select Category Name',

        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(260,200)->save('frontend/img/blog/'.$name_gen);
        $img_url = 'frontend/img/blog/'.$name_gen;

       



        Blog::insertGetId([
        'user_id'=> Auth::id(),
        'blogcategory_id'=> $request-> blogcategory_id,
        'post_title'=> $request-> post_title,
        'short'=> $request-> short,
        'post_slug'=> strtolower(str_replace('','-',$request->post_title)),
        
        'post_body'=> $request-> post_body,
        'image'=> $img_url,
        
        'created_at' => Carbon::now()

        ]);

        return Redirect() -> route('view-post');
   }


    public function Viewpost(){

        $blogs= Blog::where('user_id',Auth::id())->orderBy('id','DESC')->get();
        return view('consultant.post.view',compact('blogs'));
   }


   public function Editpost($post_id){

      $blogs= Blog::findOrFail($post_id);
      $blogcategories = Blogcategory::latest()-> get();
        return view('consultant.post.edit',compact('blogs','blogcategories'));
   }


   public function Updatepost(Request $request){

      $post_id = $request-> id;

      Blog::findOrFail($post_id)->Update([

        'user_id'=> Auth::id(),
        'blogcategory_id'=> $request-> blogcategory_id,
        'post_title'=> $request-> post_title,
        'short'=> $request-> short,
        'post_slug'=> strtolower(str_replace('','-',$request->post_title)),
        
        'post_body'=> $request-> post_body,
        
        'update_at' => Carbon::now()



      ]);
      
        return Redirect() -> route('view-post');
   }




    public function Delete($post_id){

      Blog::findOrFail($post_id)->delete();
      
        return Redirect() -> back();
   }
}
