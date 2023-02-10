<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['Course_Name', 'Course_Code', 'Department'];
    public function student() {
        return $this->belongsTo('App\Student');
    }
}
