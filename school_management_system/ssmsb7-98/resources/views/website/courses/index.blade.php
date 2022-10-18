@extends('website.master')

@section('title')
    All Courses
@endsection
@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-dark">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">All Courses</h1>
                    <h3 class="text-danger text-center">{{Session::get('message')}}</h3>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{asset($course->image)}}"  alt="" class="card-img-top"style="height: 250px;">
                        <div class="card-body">
                            <h3> {{$course->title}}</h3>
                            <h5>{{$course->teacher->name}}</h5>
                            <p>Tk.{{$course->fee}}</p>
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
    <nav aria-label="Page navigation example">
        <div class="container">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </div>
    </nav>
@endsection
