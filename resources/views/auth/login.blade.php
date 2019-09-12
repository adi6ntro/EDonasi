@extends('layouts.app_login')

@section('content_requirement')
	<div class="login100-pic js-tilt" data-tilt>
		<img src="{{ asset('/img/img-01.png') }}" alt="IMG">
	</div>

	<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
		
		@csrf
		
		<span class="login100-form-title">
			E-Donasi - Login
		</span>

		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
			<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" 
				name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email">

			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 validate-input" data-validate = "Password is required">
			<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" 
				name="password" required autocomplete="current-password" placeholder="Password">

			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="container-login100-form-btn">
			<button type="submit" class="login100-form-btn">
				Masuk
			</button>
		</div>

		<div class="text-center p-t-12">
			@if (Route::has('password.request'))
				<a class="btn btn-link" href="{{ route('password.request') }}">
					<span class="txt1">
						Lupa
					</span>
					<a class="txt2" href="#">
						Username / Password?
					</a>
				</a>
			@endif
		</div>

		<div class="text-center p-t-136">
			@if (Route::has('register'))
				<a class="txt2" href="{{ route('register') }}">
					Buat akun baru
					<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
				</a>
			@endif
		</div>
	</form>
@endsection