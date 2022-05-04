<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Status;
use App\Http\Controllers\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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


// Route::get('', function () {
//     return view('home');
// });


// Route::get('/',[Home::class,'index'])->name('');

Route::get('/',[Home::class,'index'])->name('home');

Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');


Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/logout',[LoginController::class,'destroy'])->name('logout');

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');

Route::post('/login/store',[LoginController::class,'store'])->name('login.store');


Route::get('/pishkhan2',[Status::class,'index'])->name('pishkhan2');

Route::get('/user',[User::class,'index'])->name('user');


Route::put('/user/update/{id}',[User::class,'update'])->name('user.update');




