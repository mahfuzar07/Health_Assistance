<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $fillable = [
        'full_name','hospital_name','address','phone','blood_group','note'
    ];

     
}
