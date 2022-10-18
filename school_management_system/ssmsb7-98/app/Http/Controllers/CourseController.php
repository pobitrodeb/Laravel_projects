<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $course;
    public function index(){
        return view('teacher.course.index');
    }
    public function manage(){

        $this->course = Course::where('teacher_id',Session::get('teacher_id'))->get();
        return view('teacher.course.manage',['courses'=> $this->course]);
    }
    public function create(Request $request){
        Course::newCourse($request);
        return redirect('/course/add')->with('message','Course create successfully');
    }
    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit',['course'=> $this->course]);
    }

    public function update(Request $request ,$id){
        Course::updateCourse($request,$id);
        return redirect('/course/manage')->with('message','');
    }
    public function delete($id){
        Course::deleteCourse($id);
        return redirect('/course/manage')->with('message','');
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.detail',['course'=> $this->course]);
    }
}
