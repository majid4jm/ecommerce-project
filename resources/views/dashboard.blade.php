@extends('front.layouts.app')

@section('title', 'ناحیه کاربری')

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
                            <span class="text-danger"> Hi ...</span> <strong> {{ Auth::user()->name }} </strong> Welcome To Easy Online Shop 
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection