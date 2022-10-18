<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;
use Mail;

class EnrollController extends Controller
{
    private $course,$student,$enroll,$mailData =[];
    public function index($id)
    {
        $this->course = Course::find($id);
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index', [
            'course' => $this->course,
            'student' =>$this->student,
        ]);
    }
    public function enroll(Request $request,$id)
    {

       if(Session::get('student_id'))
       {
           $this->student = Student::find(Session::get('student_id'));
       }
       else
       {
           $this->validate($request, [
               'name'   => 'required',
               'email'  =>'required|unique:students,email',
               'mobile' =>'required'
           ],[
               'email.unique' => 'Vai... ei email address ti already ase. Notun ekta den'
           ]);

           $this->student = Student::newStudent($request);

           Session::put('student_id',$this->student->id);
           Session::put('student_name',$this->student->name);
       }



       $this->enroll = Enroll::where('student_id',Session::get('student_id'))->where('course_id',$id)->first();
       if($this->enroll)
       {
           return redirect('/all-courses')->with('message','You already enroll this course. Please try another one.');
       }
       else
       {
           Enroll::newEnroll($request, $this->student->id,$id);
           /*===Email send====*/
           $this->mailData=[
               'name' => $this->student->name,
               'user' => $this->student->email,
               'pass' => $this->student->mobile,
               'url' => asset('/login-registration'),
           ];
           Mail::to($this->student->email)->send(new EnrollConfirmationMail($this->mailData));

           /*===Email send====*/
           return redirect('/enroll-now/'.$id)->with('message','Your enroll submission post save successfully. please wait .We will contact with us');
       }

    }
}
