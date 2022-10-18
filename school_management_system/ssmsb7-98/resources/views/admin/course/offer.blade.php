@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <div class="card-header bg-info">
                            <h4 class="text-white">Manage Offer</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{route('admin.create-course-offer')}}"method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-md-4" >Select Course</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="course_id">
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" >Banner Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" >Offer price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="offer_fee" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" ></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" class="btn btn-outline-info" value="Create New Course Offer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Offer Info</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl On</th>
                            <th>Course Title</th>
                            <th>Starting_date</th>
                            <th>Course Fee</th>
                            <th>Offer Fee</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($offerCourses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->offer_fee}}</td>
                                <td>
                                    <a href="{{route('admin.course-offer-edit',['id' => $course->id])}}" class="btn btn-primary" title="Course offer edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
