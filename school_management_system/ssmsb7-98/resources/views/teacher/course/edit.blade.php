@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Course Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('course.update',['id' => $course->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formrow-firstname-input">Course title</label>
                            <input type="text"  name="title" value="{{$course->title}}" class="form-control" id="formrow-firstname-input">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-email-input">Course Fee</label>
                                    <input type="number" name="fee" value="{{$course->fee}}" class="form-control" id="formrow-email-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-password-input">Starting Date</label>
                                    <input type="date" name="starting_date"  value="{{$course->starting_date}}" class="form-control" id="formrow-password-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-email-input">Course Duration</label>
                                    <input type="text" name="duration" value="{{$course->duration}}" class="form-control" id="formrow-email-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-password-input">Course Image</label>
                                    <input type="file" name="image" class="form-control-file" id="formrow-password-input">
                                    <img src="{{asset($course->image)}}" alt=" " width="100" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="formrow-email-input">Course Description</label>
                                    <textarea name="description" class="summernote">{{$course->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


