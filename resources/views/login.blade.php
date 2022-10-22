<!doctype html>
<html lang="en">
  <head>
  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
	</head>
	<body>
	<section class="ftco-section">
		<div class="container w-75">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	        <div class="icon d-flex align-items-center justify-content-center">
		      		        <span class="fa fa-user-o"></span>
		      	        </div>
		      	        <h3 class="text-center mb-4">LogIn</h3>
                    <form method="POST" action="{{route('home.login_post')}}" class="login-form">
                        @csrf
                        @if(session()->has('error_login_email'))
                            <div class="form-group">
                                <input placeholder="Enter your Email" name="email_login" type="email" value="{{session()->get('email_login')}}" class="input w-100" required="">
                            {{-- <input type="text" class="form-control rounded-left" placeholder="Username" required> --}}
                            </div>
                            <div class="form-control">
                                <span class="text-danger">{{session()->get('error_login_email')}}</span>
                            </div>                            
                        @else
                        <div class="form-group">
                            <input placeholder="Enter your Email" name="email_login" type="email" class="input w-100" required="">
                        {{-- <input type="text" class="form-control rounded-left" placeholder="Username" required> --}}
                        </div>
                        @endif
                        <div class="form-group">
                    {{-- <input type="password" class="form-control rounded-left" placeholder="Password" required> --}}
                            <input placeholder="Enter your Password" name="password_login" type="password" class="input w-100" required="">
                        </div>
                        @if(session()->has('error_login_password'))
                            <div class="form-control">
                                <span class="text-danger">{{session()->get('error_login_password')}}</span>
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                        </div>
                        <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary text-secondary" style="font-size: 15px">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                        </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#">Forgot Password</a>
                        </div>
                        </div>
                        <div>
                            <p class="text-black text-center">OR</p>
                        </div>
                        <div class="form-group d-flex">
                            <p class=" px-2" style="color: gray; font-size: 19px">I dont have account :</p>
                            <a href="{{route('home.register')}}" class="text-decoration-none reg">register</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<script src="js/MyJs.js"></script>
	</body>
</html>

