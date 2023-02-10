<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matric_No extends Model
{
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
