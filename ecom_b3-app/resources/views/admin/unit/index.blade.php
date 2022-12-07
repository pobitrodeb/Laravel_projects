@extends('admin.master')
@section('title')
    Add Unit
@endsection
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Unit form</h4>

                <form action="" POST="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Unit name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Unit Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" id="" cols="115" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Brand Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    </div>

                            <div class="form-group row mb-4">
                                <label for="" class="col-sm-3 col-form-label"> Publication Status </label>
                                <div class="col-sm-9">
                                    <label for="">   <input type="radio" name="status" value="1" checked> Published </label>
                                    <label for="">   <input type="radio" name="status" value="0"> Unpublished</label>
                                </div>
                            </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-md">Create New Unit </button>
                        </div>
                    </div>
            </div>

                </form>
            </div>
        </div>
    </div>
@endsection
