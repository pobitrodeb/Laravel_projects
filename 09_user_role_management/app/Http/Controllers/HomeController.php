<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
    public function about()
    {
        return view('website.about.index');
    }

    public function studentLogin()
    {
        return view('website.student-login.index');
    }
    public function studentRegister()
    {
        return view('website.student-login.register');
    }
    public function studentAdmission()
    {
        return view('website.student-login.admission');
    }
}
