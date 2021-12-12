@extends('admin.layouts.app')
@section('title', 'ویرایش پروفایل')
@section('head', 'Profile Update Info')

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
                <form role="form" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $editData->name }}">
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $editData->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="profile_photo_path" class="form-control" id="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ (!empty($editData->profile_photo_path))?asset('upload/admin_images/'.$editData->profile_photo_path):asset('upload/no_image.png') }}" width="150px" height="100px" alt="admin avatar" style="border:2px solid" id="Image_show">
                                </div>
                            </div>
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

    
    <script>
        $(document).ready(function(){
            $('#Image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#Image_show').attr('src' , e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>

@endsection