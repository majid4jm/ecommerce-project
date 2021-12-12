<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Auth;

class AdminProfileController extends Controller
{
    public function adminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view' , compact('adminData'));
    }
    
    public function adminProfileEdit(){
        $editData = Admin::find(1);
        return view('admin.admin_profile_edit' , compact('editData'));
    }
    
    public function adminProfileUpdate(Request $request){
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        
        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');

            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images') , $filename);
            
            $data->profile_photo_path = $filename;
        }
        $data->save();   

        $noti = [
            'message'    => 'Profile Updated Successfull',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.profile')->with($noti);
    }

    public function adminProfileChangePassword(){
        return view('admin.admin_change_password');
    }

    public function updateChangePassword(Request $request){
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Admin::find(1)->password;

        if($request->oldpassword === $hashedPassword){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        }
        else{
            return redirect()->back();
        }

    }
}
