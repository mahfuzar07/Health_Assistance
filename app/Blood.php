<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $fillable = [
        'full_name','user_id','hospital_name','address','phone','blood_group','note'
    ];

    public function join(){
     	return $this->belongsTo(User::class, 'user_id');

     
	}
}
