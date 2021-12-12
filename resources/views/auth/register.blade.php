@extends('front.layouts.app')
@section('title', 'ورود')

@section('content')
    
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
    <form method="POST" class="register-form outer-top-xs" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">@csrf
		<div class="form-group">
		    <label class="info-title" for="email">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="email"
            name="email" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
        </div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" id="remember_me" name="remember">Remember me!
		  	</label>
            @if (Route::has('password.request'))
		  	    <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
            @endif
        </div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
    <form method="POST" class="register-form outer-top-xs" action="{{ route('register') }}">@csrf
        <div class="form-group">
            <label class="info-title" for="name">Name <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" id="name" name="name">
            @error('name')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </div>
		<div class="form-group">
	    	<label class="info-title" for="email">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" name="email" id="email" >
            @error('email')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
		    <label class="info-title" for="phone">Phone Number <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="phone" name="phone">
            @error('phone')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" name="password" id="password" >
            @error('password')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation"
            name="password_confirmation" >
            @error('password_confirmation')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('front.layouts.brands')
        <!-- /.logo-slider -->
</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection