<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section class="mt-5">
    <div class="container mx-auto">
        <a href="{{route('student.index')}}" type="button" class="btn btn-primary mx-3">Add Student </a>
        <a href="" type="button" class="btn btn-warning mx-3">Edit Student </a>
        <button type="button" class="btn btn-secondary mx-3">Manage Student </button>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Student Form</h4>
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="studentName" class="form-control" @error('studentName') is-invalid @enderror value="{{old('studentName')}}">
                                    <span>
                                        @error('studentName')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror value="{{old('email')}}">
                                    <span>
                                        @error('email')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Mobile Number</label>
                                <div class="col-sm-9">
                                    <input type="number" name="mobile" class="form-control" @error('mobile' ) is-invvalid @enderror value="{{old('mobile')}}">
                                    <span>
                                        @error('mobile')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100">Create New Student </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
