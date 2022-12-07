@extends('admin.master')
@section('title')
    Manage Brand
@endsection
@section('body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Brand </h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Brand Name </th>
                            <th>Brand Image</th>
                            <th>Brand Description</th>
                            <th>Brand Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $brands as $category)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>
                            <td><img src="{{asset($category->image)}}" alt="" height="60" width="90"> </td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->status==1?'Publish': 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('brand.edit', ['id'=> $category->id])}}" class="btn btn-success"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('brand.delete', ['id'=> $category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this')";> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
