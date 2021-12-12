<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;

use App\Http\Controllers\Frontend\IndexController;

// Front All Routes

Route::get('/', [IndexController::class , 'index'])->name('home');
Route::get('/user/logout', [IndexController::class , 'userLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class , 'userProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class , 'userProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class , 'userChangePassword'])->name('user.change.password');
Route::post('/user/password/update', [IndexController::class , 'userPasswordUpdate'])->name('user.password.update');

// Admin All Routes

Route::group(['prefix' => 'admin' , 'middleware' => ['admin:admin']] , function(){
    Route::get('/login' , [AdminController::class , 'loginForm']);
    Route::post('/login' , [AdminController::class , 'store'])->name('admin.login');
});

Route::get('/admin/logout' , [AdminController::class , 'destroy'])->name('admin.logout');

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/profile' , [AdminProfileController::class , 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit' , [AdminProfileController::class , 'adminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/update' , [AdminProfileController::class , 'adminProfileUpdate'])->name('admin.profile.update');
Route::get('/admin/profile/changePassword' , [AdminProfileController::class , 'adminProfileChangePassword'])->name('admin.change.password');
Route::post('/admin/profile/updatePassword' , [AdminProfileController::class , 'updateChangePassword'])->name('update.change.password');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $user = User::find(Auth::user()->id);
    return view('dashboard' , compact('user'));
})->name('dashboard');