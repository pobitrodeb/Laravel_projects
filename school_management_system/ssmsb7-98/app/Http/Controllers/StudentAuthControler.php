<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentAuthControler extends Controller
{
    private $student;
    public function logout()
    {
          Session::forget('student_id');
          Session::forget('student_name');

          return redirect('/login-registration');
    }
    public function login(Request $request)
    {
        $this->student = Student::where('email',$request->email)->first();
        if ($this->student)
        {
            if (password_verify($request->password,$this->student->password))
            {
                Session::put('student_id',$this->student->id);
                Session::put('student_name',$this->student->name);

                return redirect('/student/dashboard');
            }
            else
            {
                return redirect()->back()->with('message','password is invalid');
            }
        }
        else
        {
            return redirect()->back()->with('message','Email is invalid');
        }
    }

}
