@extends('front.layouts.app')

@section('title', 'پروفایل کاربر')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img src="{{ (!empty($user->profile_photo_path))?asset('upload/user_images/'.$user->profile_photo_path):asset('upload/no_image.png') }}" class="card-img-top" alt="" width="100%" height="100%" style="border-radius:50%"><br><br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block"> Home </a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block"> Profile Update </a>
                    <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block"> Change Password </a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block"> Logout </a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"> 
                        <span class="text-danger"> Change Password </span> <strong></strong>
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('user.password.update') }}" method="post">@csrf
                            
                            <input type="hidden" class="form-control unicase-form-control text-input" name="oldpassword" id="current_password" value="{{ Auth::user()->password }}">

                            <div class="form-group">
                                <label class="info-title" for="password"> New Password <span></span></label>
                                <input type="password" class="form-control unicase-form-control text-input" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="current_password"> Confirm Password <span></span></label>
                                <input type="password" class="form-control unicase-form-control text-input" name="password_confirmation" id="password_confirmation">
                            </div>
                            
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection