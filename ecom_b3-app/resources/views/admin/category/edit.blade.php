@extends('admin.master')
@section('title')
    Edit Categorry
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Category Form </h4>

                    <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input"  class="col-sm-3 col-form-label">Category Name </label>
                            <div class="col-sm-9">
                                <input type="text" name="name"  value="{{$category->name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Category Description </label>
                            <div class="col-sm-9">
                                <textarea name="description" id="" cols="110" rows="10">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Category Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                                <img src="{{asset($category->image)}}" alt="" height="150" width="200">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label"> Publication Status </label>
                            <div class="col-sm-9">
                                <label for="">   <input type="radio" name="status" {{$category->status == 1 ? 'checked' : ''}}  value="1" checked> Published </label>
                                <label for="">   <input type="radio" name="status" {{$category->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary w-md">Update Category </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

