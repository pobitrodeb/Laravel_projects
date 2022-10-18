@extends('website.master')

@section('title')
    Student Profile
@endsection


@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-dark">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">{{Session::get('student_name')}}Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('student-dashboard')}}" class="nav-link border-bottom">Dashboard</a></li>
                            <li><a href="{{route('student-profile')}}" class="nav-link border-bottom">Profile</a></li>
                            <li><a href="{{route('student-course')}}" class="nav-link border-bottom">All Course</a></li>
                            <li><a href="" class="nav-link border-bottom">Change Password</a></li>
                            <li><a href="{{route('student-logout')}}" class="nav-link border-bottom">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <form action="{{route('update-student',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Your Image</label>
                                <div class="col-md-9">
                                    <img src="{{asset($student->image)}}" alt="" height="150" width="100">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" value="{{$student->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" value="{{$student->mobile}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" class="form-control">{{$student->address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark" value="Update Information">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

