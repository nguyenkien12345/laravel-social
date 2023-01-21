<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();  // key facebook được lấy trong config/services.php. Chuyển hướng đến trang đăng nhập facebook
});

Route::get('/auth/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();  // key facebook được lấy trong config/services.php. Lấy ra thông tin người dùng facebook
});
