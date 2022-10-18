
@extends('admin.master')

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
                            <th>Teacher info</th>
                            <th>Starting_date</th>
                            <th>Course Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->teacher->name.'('.$course->teacher->mobile.')'}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->status== 1 ? 'Published' : 'Unpublished'}}</td>

                                <td>
                                    <a href="{{route('admin.course-detail',['id' => $course->id])}}" class="btn btn-primary" title="View Course Details">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.course-status',['id' => $course->id])}}" class="btn {{$course->status == 0 ? 'btn-warning': 'btn-success'}}"title="course status ">
                                        <i class="fa fa-arrow-up"></i>
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

