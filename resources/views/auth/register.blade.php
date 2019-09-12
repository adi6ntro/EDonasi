@extends('layouts.app_login')

@section('content_requirement')
	<div class="login100-pic js-tilt" data-tilt>
		<img src="{{ asset('/img/img-01.png') }}" alt="IMG" style="margin-top:4rem;">
	</div>

	<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
		
		@csrf
		
		<span class="login100-form-title">
			E-Donasi - Register
		</span>

		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="off" placeholder="Nama">

			@error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<span class="focus-input100"></span>
		</div>

		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="email" type="email" class="input100 @error('name') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email">

			@error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<span class="focus-input100"></span>
		</div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="password" type="password" class="input100 @error('name') is-invalid @enderror"
                name="password" value="{{ old('password') }}" required autocomplete="off" placeholder="Password">

			@error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<span class="focus-input100"></span>
		</div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="password-confirm" type="password" class="input100 @error('name') is-invalid @enderror"
                name="password_confirmation" value="{{ old('name') }}" required autocomplete="off" placeholder="Konfirmasi Password">
			<span class="focus-input100"></span>
		</div>
		
		<div class="container-login100-form-btn">
			<button type="submit" class="login100-form-btn">
				Daftar
			</button>
		</div>
        
		<div class="text-center p-t-136">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">Kembali ke halaman Login</a>
			</li>
		</div>
	</form>
@endsection