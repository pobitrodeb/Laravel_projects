<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>pobitro | eLearning-register</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('/')}}website/img/logopdn.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('/')}}website/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('/')}}website/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('/')}}website/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('/')}}website/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('/')}}website/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}website/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}website/css/vendors.css" rel="stylesheet">
    <link href="{{asset('/')}}website/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('/')}}website/css/custom.css" rel="stylesheet">

</head>

<body id="register_bg">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="{{route('home')}}"><img src="{{asset('/')}}website/img/logopdn.png" width="149" height="42" alt=""></a>
        </figure>
        <form autocomplete="off">
            <div class="form-group">

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Your Name</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Your Last Name</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="email">
						<label class="input_label">
						<span class="input__label-content">Your Email</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="password" id="password1">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="password" id="password2">
						<label class="input_label">
						<span class="input__label-content">Confirm password</span>
					</label>
					</span>

                <div id="pass-info" class="clearfix"></div>
            </div>
            <a href="#0" class="btn_1 rounded full-width add_top_30">Register to pobitrodeb</a>
            <div class="text-center add_top_10">Already have an acccount? <strong><a href="login.html">Sign In</a></strong></div>
        </form>
        <div class="copy">© 2021 pobitrodeb</div>
    </aside>
</div>
<!-- /login -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('/')}}website/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/js/common_scripts.js"></script>
<script src="{{asset('/')}}website/js/main.js"></script>
<script src="{{asset('/')}}website/assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('/')}}website/js/pw_strenght.js"></script>

</body>
</html>
