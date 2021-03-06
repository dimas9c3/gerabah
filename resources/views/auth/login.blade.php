<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GERABAH - LOGIN</title>

	<!-- Bootstrap -->
	<link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
	<!-- Animate.css -->
	<link href="{{ asset('backend/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{ asset('backend/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
	<div>
		<a class="hiddenanchor" id="signin"></a>

		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<h1>Login Form</h1>
						<div>
							<label>Email</label>
							@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
							<input type="text" name="email" class="form-control" placeholder="Enter Email" required="" />
						</div>
						<div>
							<label>Password</label>
							@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required="" />
						</div>
						<div>
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label for="remeber">Remember me</label>
						</div>
						<div>
							<button type="submit" class="btn btn-default submit">Log in</button>
							<a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
						</div>

						<div class="clearfix"></div>

						<div class="separator">
							<div class="clearfix"></div>
							<br />

							<div>
								<h1><i class="fa fa-paw"></i> GERABAH ADMIN</h1>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</body>
</html>
