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
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

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
	<section class="ftco-section py-3">
		<div class="container w-75">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	        <div class="icon d-flex align-items-center justify-content-center">
		      		        <span class="fa fa-user-o"></span>
		      	        </div>
		      	        <h3 class="text-center mb-4">Register</h3>
                         <form method="POST" action="{{route('home.register_post')}}" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input placeholder="First Name" name="FirstName" type="text" class="input w-100" required="">
                            </div>
                            <div class="form-group">
                                <input placeholder="last Name" name="lastName" type="text" class="input w-100" required="">
                            </div>
                            <div class="form-group">
                                <input placeholder="Email" name="EmailRegister" type="email" class="input w-100" required="">
                            </div>
                            @if (session()->has('errorMessege'))
                            <div class="form-group">
                                <span class="text-danger" id="sp_email">{{session()->get('errorMessege')}}</span>
                            </div>
                            @endif
                            <div class="form-group">
                                <input placeholder="Password" name="PasswordRegister" id="PasswordRegister" type="password" class="input w-100" required="">
                            </div>
                            <div class="form-group">
                                <input placeholder="Confirme your Password" name="ConfirmePassword" id="ConfirmePassword" type="password" class="input w-100" required="">
                            </div>
                            <div class="form-group">
                                <span class="text-danger" style="display: none" id="sp_pass">Password is not the same</span>
                            </div>
                            <div class="form-group d-md-flex">
                                <div>
                                    <label class="checkbox-wrap checkbox-primary text-secondary mt-4" style="font-size: 14px">I read all the privacy and <span class="text-success"> i accept all of them</span>
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                                </label>
                                </div>
                             </div>
                            <div class="form-group">
                             <button type="submit" id="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
                            </div>
                        </form>
                        <div class="fomr-control"><button class="btn btn-primary" id="btn">click</button></div>
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

