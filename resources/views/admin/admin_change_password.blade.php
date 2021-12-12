@extends('admin.layouts.app')
@section('title', 'ویرایش پروفایل')
@section('head', 'Profile Change Password')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Admin Profile Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('update.change.password') }}" method="POST">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control" name="oldpassword" placeholder="Enter Current Password" value="{{ DB::table('admins')->where('id' , 1)->pluck('password')->first() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmed_password">Confirmed Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirmed Password">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                       <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

@endsection