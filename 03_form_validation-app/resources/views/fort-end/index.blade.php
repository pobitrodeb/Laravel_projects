<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pobitro | form validation  </title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header text-center"> <h2> Laravel Form Validation </h2> </div>

                <div class="card-body">

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}

                    <h3 class="text-center bg-success text-white">{{Session::get('message')}}</h3>
                    <form action="{{route('member.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="" class="col-md-4"> Full Name *</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="fullName" @error('fullName') is-invalid @enderror value="{{old('fullName')}}">
                                <span class="mt-2">
                                    @error('fullName')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4"> Email Address *</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" @error('email') is-invalid @enderror  value="{{old('email')}}">

                                @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4"> Password *</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" @error('password') is-invalid @enderror  value="{{old('password')}}">

                                @error('password')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="" class="col-md-4"> </label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-dark w-50 float-end" value="Create New Member">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
