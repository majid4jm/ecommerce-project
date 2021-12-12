<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function userLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function userProfile(){
        $user = User::find(Auth::user()->id);
        return view('front.profile.user_profile' , compact('user'));
    }

    public function userProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');

            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images') , $filename);
            
            $data->profile_photo_path = $filename;
        }
        $data->save();   

        $noti = [
            'message'    => 'Profile Updated Successfull',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard')->with($noti);
    }

    public function userChangePassword(){
        $user = User::find(Auth::user()->id);
        return view('front.profile.change_password' , compact('user'));
    }

    public function userPasswordUpdate(Request $request){
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;

        if($request->oldpassword === $hashedPassword){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }
        else{
            return redirect()->back();
        }

    }
}
