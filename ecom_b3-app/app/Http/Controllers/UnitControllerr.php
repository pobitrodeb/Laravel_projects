<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitControllerr extends Controller
{
    public function index()
    {
        return view('admin.unit.index');
    }
    public function manage()
    {
        return view('admin.unit.manage');
    }

}
