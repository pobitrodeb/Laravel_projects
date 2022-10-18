@extends('website.master')

@section('title')
    Student Dashboard
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
                            <li><a href="{" class="nav-link border-bottom">Account</a></li>
                            <li><a href="{{route('student-logout')}}" class="nav-link border-bottom">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1>This is my Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
