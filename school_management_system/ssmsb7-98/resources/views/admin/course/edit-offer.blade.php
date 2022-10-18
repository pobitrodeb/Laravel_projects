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

                            <form action="{{route('admin.course-offer-update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-md-4" >Select Course</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="course_id">
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}" {{$course->id == $single_course->id ? 'selected' : ''}}>{{$course->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" >Banner Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{asset($single_course->banner_image)}}" alt="" height="150" width="300" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" >Offer price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="offer_fee" class="form-control" value="{{$single_course->offer_fee}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4" ></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" class="btn btn-outline-info" value="Edit Course Offer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



