@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Teacher Info</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl On</th>
                            <th>Course Title</th>
                            <th>Course Fee</th>
                            <th>Starting_date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->status== 1 ? 'Published' : 'Unpublished'}}</td>

                                <td>
                                    <a href="{{route('course.detail',['id' => $course->id])}}" class="btn btn-primary" title="View Course Details">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('course.edit',['id' => $course->id])}}" class="btn btn-success"title="Edit Course ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('course.delete',['id' => $course->id])}}" class="btn btn-danger"title="Delete Course">
                                        <i class="fa fa-trash"></i>
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

