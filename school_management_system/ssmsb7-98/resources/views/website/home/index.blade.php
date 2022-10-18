@extends('website.master')

@section('title')
    Simple Student Management System
@endsection

@section('body')
    <div id="slider" class="carousel slide shadow" data-bs-ride="carousel" data-bs-interval="1800">
        <ol class="carousel-indicators">
            @foreach($offer_courses as $key=> $offer_course)
            <li data-bs-target="#slider" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($offer_courses as $key1 => $offer_course)
              <div class="carousel-item {{$key1 == 0 ? 'active' : ''}}">
                  <img src="{{$offer_course->banner_image}}" alt="" class="w-100" style="height: 600px"/>
                  <div class="carousel-caption my-caption">
                      <h1>{{$offer_course->title}}</h1>
                      <p>Actual Course Fee:{{$offer_course->fee}}</p>
                      <p>Offer Course Fee:{{$offer_course->offer_fee}}</p>
                      <a href="{{route('detail',['id'=> $offer_course->id])}}" class="btn btn-success px-5">Read More</a>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
    <section class="">
        <div class="container-fluid py-5 bg-dark">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Our popular Courses</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
        <div class="row">
            @foreach($p_courses as $p_course )
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{asset($p_course->image)}}"  alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h3>{{$p_course->title}} </h3>
                        <h5>{{$p_course->teacher->name}}</h5>
                        <p>Tk. {{$p_course->fee}}</p>
                        <br>
                        <p>Staring Date: {{$p_course->starting_date}}</p>
                        <hr>
                        <a href="{{route('detail',['id'=> $p_course->id])}}" class="btn btn-outline-success">Read More</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5 bg-dark">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Recent Courses</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{asset($course->image)}}"  alt="" class="card-img-top" style="height: 250px;">
                        <div class="card-body">
                            <h4> {{$course->title}}</h4>
                            <h5>{{$course->teacher->name}}</h5>
                            <p>tk. {{$course->fee}}</p>
                            <br>
                            <p>Staring Date: {{$course->starting_date}}</p>
                            <hr>
                            <a href="{{route('detail',['id'=> $course->id])}}" class="btn btn-outline-success">Read More</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
