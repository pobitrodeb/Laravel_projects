@extends('admin.master')

@section('body')
    <div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Teacher Form</h4>
                 <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                <form action="{{route('teacher.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formrow-firstname-input">Name</label>
                        <input type="text"  name="name" class="form-control" id="formrow-firstname-input">
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Email</label>
                                <input type="email" name="email" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Password</label>
                                <input type="password" name="password" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Phone Number</label>
                                <input type="number" name="mobile" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Image</label>
                                <input type="file" name="image" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Create a New teacher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection

