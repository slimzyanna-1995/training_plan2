<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   public function course(){
    return $this->hasMany('App\Course');
   }

   public function matric_No(){
    return $this->hasOne('App\Matric_No');
   }
}
