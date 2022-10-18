@extends('website.master')

@section('title')
    Login Registration
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-light">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-dark">Login Or Registration </h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 m">
                    <div class="card card-body border-0 h-100 shadow">
                        <h1 class="text-center">Login Form</h1>
                        <hr/>
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                        <form action="{{route("student-login")}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="card card-body border-0 h-100 shadow">
                        <h1 class="text-center">Registration Form</h1>
                        <hr/>
                        <form action="">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 mb-3">
                                <label class="col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Registration"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

