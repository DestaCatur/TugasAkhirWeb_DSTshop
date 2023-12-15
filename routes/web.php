<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route resource
Route::get('/web',function () {
    return view('web');
});
Route::get('/guru',function () {
    return view('guru');
});
Route::get('/',[App\Http\Controllers\PostController::class,'home']);
Route::get('search',[App\Http\Controllers\PostController::class,'search']);



Route::get('/siswa',function () {
    return view('siswa');
});

Route::get('/blog',function () {
    return view('blog');
});
Route::get('/register',function () {
    return view('register');
});
Route::get('/login',function () {
    return view('login');
});
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

