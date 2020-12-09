<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'category_id','product_name','product_slug','product_code','product_quantity','price','short_description','description','image_1','image_2','image_3','status'
    ];

     public function join(){
     	return $this->belongsTo(Category::class, 'category_id');

    	
   }


}



        