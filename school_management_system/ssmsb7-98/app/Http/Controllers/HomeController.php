<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Mail;
use Session;

class HomeController extends Controller
{
    private $courses,$p_course,$offerCourse,$course,$enroll,$status;
    public function index()
    {
        return view('website.home.index',[
            'courses'=>Course::where('status',1)->orderBy('id','desc')->take(3)->get(),
            'p_courses'=> Course::where('status',1)->orderBy('id','desc')->skip(3)->take(3)->get(),
            'offer_courses'=>Course::where('offer_fee', '>',0)->orderBy('id','desc')->get(),
        ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function courses()
    {
        $this->course = Course::where('status',1)->get();
        return view('website.courses.index',['courses'=>$this->course]);
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        if(Session::get('student_id'))
        {
            $this->enroll = Enroll::where('student_id',Session::get('student_id'))->where('course_id',$id)->first();
            if ($this->enroll)
            {
                $this->status = true;
            }
            else{
                $this->status = false;
            }
        }
        else{
            $this->status = false;
        }
        return view('website.courses.detail', [
            'course'=> $this->course,
            'status'=> $this->status,
            ]);
    }
    public function contact()
    {
        return view('website.contact.index');
    }

    public function auth()
    {
        return view('website.auth.index');
    }

    public function sendMail()
    {

        return 'success';
    }


}
