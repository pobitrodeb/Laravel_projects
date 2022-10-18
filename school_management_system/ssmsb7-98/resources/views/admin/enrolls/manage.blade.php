@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl On</th>
                            <th>Course Title</th>
                            <th>Student Info</th>
                            <th>Enroll Date</th>
                            <th>Payment Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$enroll->course->title}}</td>
                            <td>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</td>
                            <td>{{$enroll->enroll_date}}</td>
                            <td>{{$enroll->payment_status}}</td>
                            <td>{{$enroll->enroll_status}}</td>
                            <td>
                                <a href="{{route('admin.update-enroll-status',['id' =>$enroll->id])}}" class="btn {{$enroll->enroll_status == 'Pending' ? 'btn-warning': 'btn-success'}}"title="course status ">
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

