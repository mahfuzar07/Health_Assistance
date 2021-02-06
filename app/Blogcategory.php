<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $fillable = [
        'user_id','category_name','category_description', 'status',
    ];


    public function join(){
     	return $this->belongsTo(Consultant::class, 'user_id');

    	
   }

}
