<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $courses,$course,$message,$offerCourses,$enrolls;
    public function courseManage(){
        $this->courses = Course::orderBy('id','desc')->take(50)->get();
        return view('admin.course.manage',['courses'=>$this->courses]);
    }

    public function courseDetail($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.detail',['course'=>$this->course]);
    }
    public function courseStatus($id)
    {
        $this->message=Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message', $this->message);
    }

    public function manageOffer()
    {
        $this->courses = Course::where('status', 1)->orderBy('id','desc')->get();
        $this->offerCourses = Course::where('status', 1)->where('offer_fee','>',0)->orderBy('id','desc')->get();
        return view('admin.course.offer',[
            'courses'=>$this->courses,
            'offerCourses'=> $this->offerCourses,
        ]);
    }

    public function createOffer(Request $request){
         Course::newCourseOffer($request);
         return redirect('admin/manage-offer')->with('message','New course offer create');
    }

    public function editOffer($id)
    {
        $this->courses = Course::where('status', 1)->orderBy('id','desc')->get();
        $this->course =Course::find($id);

        return view('admin.course.edit-offer',[
            'courses'       => $this->courses,
            'single_course' => $this->course,
        ]);
    }
    public function updateOffer(Request $request)
    {

        Course::updateCourseOffer($request);
        return redirect('admin/manage-offer')->with('message','');
    }

    public function manageEnroll(){
        $this->enrolls = Enroll::orderBy('id','desc')->get();
        return view('admin.enrolls.manage',['enrolls'=>$this->enrolls]);
    }
    public function updateEnroll($id)
    {
      Enroll::updateEnrollStatus($id);
      return redirect()->back()->with('message','Enroll status info update');
    }
}
