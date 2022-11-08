<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        return view('website.course.index');
    }
    public function courseDetail()
    {
        return view('website.course.course-detail');
    }
}
