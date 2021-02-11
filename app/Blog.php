<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
      protected $fillable = [
        'blogcategory_id','user_id','post_title','short','post_slug','post_body','image','status'
    ];

     public function join(){
     	return $this->belongsTo(Blogcategory::class, 'blogcategory_id');
     	

    	
   }

    public function joincon(){
     	
     	return $this->belongsTo(Consultant::class, 'user_id');

    	
   }
}
