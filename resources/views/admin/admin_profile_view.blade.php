@extends('admin.layouts.app')
@section('title', 'نمایش پروفایل')
@section('head', 'Profile Info')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ (!empty($adminData->profile_photo_path))?asset('upload/admin_images/'.$adminData->profile_photo_path):asset('upload/admin_images/no_image.png') }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Admin Name : {{ $adminData->name }}</h3>

                <p class="text-muted text-center">Admin Email : {{ $adminData->email }}</p>

                <p class="text-center"><a href="{{ route('admin.profile.edit') }}" class="btn btn-success"> Edit Profile </a></p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul>

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection