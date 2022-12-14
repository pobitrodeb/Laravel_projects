<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>:: Crush On :: Login</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/main.css"/>
    <link rel="stylesheet" href="{{asset('/')}}admin/theme2/assets/css/theme2.css" />

</head>
<body class="font-opensans">

<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-5">
                    <a class="header-brand" href="index.html"><i class="fa fa-dashboard brand-logo"></i></a>
                </div>
                <div class="card-title">Login to your account</div>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" />
                            <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
{{--                        <a href="index.html" class="btn btn-primary btn-block" title="">Sign in</a>--}}
                        <input type="submit" class="btn btn-primary btn-block" title="" value="Sing in">
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text-muted">
                Don't have account yet? <a href="register.html">Sign up</a>
            </div>
        </div>
    </div>
    <div class="auth_right">
        <div class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/')}}admin/theme2/assets/images/slider1.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/')}}admin/theme2/assets/images/slider2.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Quality Code and Easy Customizability</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/')}}admin/theme2/assets/images/slider3.svg" class="img-fluid" alt="login page" />
                    <div class="px-4 mt-4">
                        <h4>Cross Browser Compatibility</h4>
                        <p>Overview We're a group of women who want to learn JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('/')}}admin/assets/bundles/lib.vendor.bundle.js"></script>
<script src="{{asset('/')}}admin/assets/js/core.js"></script>
</body>
</html>
