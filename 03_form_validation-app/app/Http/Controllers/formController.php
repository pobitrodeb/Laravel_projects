<?php

namespace App\Http\Controllers;

use App\Models\formData;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function index()
    {
        return view('fort-end.index');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'fullName'  => 'required|max:55',
            'email'     => 'required|email|unique:form_data|max:75',
            'password'  => 'required|unique:form_data|min:6|max:12',
        ]);

        formData::newMember($request);
       return redirect('/')->with('message', 'New Member Create Successfully');
    }
}
