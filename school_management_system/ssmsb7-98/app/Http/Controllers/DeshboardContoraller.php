<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeshboardContoraller extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

}
