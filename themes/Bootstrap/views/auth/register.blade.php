@extends('layouts.register')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/styleReg.css') }}">
		<link rel="stylesheet" href="booking/css/booking.css">
		<!-- <link rel="stylesheet" href="css/style1.css"> -->

        <script src="{{asset('js/jquery-3.3.2.min.js')}}"></script>
		<script src="{{asset('js/jquery.form-validator.min.js')}}"></script>
		<script src="{{asset('js/main2.js')}}"></script>
		<script src="js/jquery.mobile.customized.min.js"></script>
		<script src="{{asset('booking/js/booking.js')}}"></script>
		<script src="booking/js/booking.js"></script>
    
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/travel.jpg" alt="">
			</div>
			<div class="form-inner">
            <form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">User Name:</label>
						<input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocusdata-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Age :</label>
						<input input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus data-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Gender :</label>
						<input input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus data-validation-length="3-12">
					</div>
				
                    <div class="form-group">
						<label for="">Origin:</label>
						<input id="origin" type="text" class="form-control @error('origin') is-invalid @enderror" name="origin" value="{{ old('origin') }}" required autocomplete="origin" autofocus data-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Passport No:</label>
						<input  id="passport_no" type="text" class="form-control @error('passport_no') is-invalid @enderror" name="passport_no" value="{{ old('passport_no') }}" required autocomplete="passport_no" autofocus data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-validation-length="min8">
					</div>
                    <div class="form-group" >
						<label for="">Confirm Password:</label>
						<input  input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" data-validation-length="min8">
					</div>
					<button>create my account</button>
					<div class="socials">
						<p>Sign up with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		
		
	
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection
