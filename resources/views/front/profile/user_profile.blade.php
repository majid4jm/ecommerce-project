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
                        <span class="text-danger"> Hi ...</span> <strong> {{ Auth::user()->name }} </strong> Update Your Profile 
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('user.profile.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label class="info-title" for="name">Name <span></span></label>
                                <input type="text" class="form-control unicase-form-control text-input" value="{{ $user->name }}" name="name">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">Email Address <span></span></label>
                                <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{ $user->email }}" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="phone">Phone Number <span></span></label>
                                <input type="text" class="form-control unicase-form-control text-input" value="{{ $user->phone }}" name="phone">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="profile_photo_path"> Profile Photo <span></span></label>
                                <input type="file" class="form-control unicase-form-control text-input" name="profile_photo_path">
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