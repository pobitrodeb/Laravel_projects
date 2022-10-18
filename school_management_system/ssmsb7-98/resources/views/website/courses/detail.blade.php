@extends('website.master')
@section('title')
    {{$course->title}}
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow border-0 rounded-0">
                        <img src="{{asset($course->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow border-0 rounded-0">
                        <h1 class="text-center">{{$course->title}}</h1>
                        <h3>Trainer Name: {{$course->teacher->name}}</h3>
                        <h3>Starting Date: {{$course->starting_date}}</h3>
                        @if($course->offer_fee > 0)
                           <h3>Course Fee: Tk. {{$course->fee}}</h3>
                           <h3>Offer Fee: Tk. {{$course->offer_fee}}</h3>
                        @else
                           <h3>Course Fee: Tk. {{$course->fee}}</h3>
                        @endif

                           <h3>Venu: Karwanbazar, Dhaka 1205</h3>

                        <a href="{{route('enroll-now',['id'=> $course->id])}}" class="  btn btn-outline-success px-5 {{$status == true ? 'disabled' : ''}}">Enroll Now</a>
                        @if($status)
                            <p class="mt-5 text-danger">Your are already enroll this course</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card card-body">
                        <h2>Course Details Information</h2>
                        <hr/>
                        <p>{!! $course->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
