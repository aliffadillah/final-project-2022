<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ secure_asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')  }}">

	<link rel="stylesheet" href="{{ secure_asset('template') }}/css/style.css">
	

	</head>
	<body class="img" style="background-image: url('../../template/images/tree.jpg');">
		<div class="login-wrap p-4 p-md-5"></div>
	<section class="ftco-section">
		<div class="container">
			 <div class="row justify-content-center">
				 <div class="col-md-6 text-center mb-5">
					<h2 style="color: White" class="heading-section">Login</h2>
				</div> 
			</div> 
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 style="color: White" class="mb-4 text-center">Have an account?</h3>
				  <form action="{{ route('login') }}" class="signin-form" method="post">
					@csrf
					<form action="{{ route('login') }}" method="post">
						@csrf
		      	<form action="#" class="signin-form">
		      		<div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
					</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
				<!-- <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" href="{{ route('register') }}">Register</button>
	            </div> -->
	           <!-- <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div> -->
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{secure_asset('style') }}/js/jquery.min.js"></script>
  <script src="{{secure_asset('style') }}/js/popper.js"></script>
  <script src="{{secure_asset('style' )}}/js/bootstrap.min.js"></script>
  <script src="{{secure_asset('style') }}/js/main.js"></script>

	</body>
</html>