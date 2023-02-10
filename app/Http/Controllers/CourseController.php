<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class CourseController extends Controller
{
    public function index() {
        return response()->json(Course::get(), 200);
    }

    
}

