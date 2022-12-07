@extends('admin.master')
@section('title')
    Edit Brand
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Brand Form </h4>

                    <form action="{{route('brand.update', ['id' => $brand->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input"  class="col-sm-3 col-form-label">Brand Name </label>
                            <div class="col-sm-9">
                                <input type="text" name="name"  value="{{$brand->name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Brand Description </label>
                            <div class="col-sm-9">
                                <textarea name="description" id="" cols="110" rows="10">{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Brand Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                                <img src="{{asset($brand->image)}}" alt="" height="150" width="200">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label"> Publication Status </label>
                            <div class="col-sm-9">
                                <label for="">   <input type="radio" name="status" {{$brand->status == 1 ? 'checked' : ''}}  value="1" checked> Published </label>
                                <label for="">   <input type="radio" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary w-md">Update Brand </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

