<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthenticationController::class, 'login'])
->name('login');

Route::get('/registration', function () {
    return view('auth.registration');
});

Route::post('/registration', [AuthenticationController::class, 'registration'])
->name('registration');




Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/skills', function () {
//     return view('skills');
// });

// Route::get('/goals', function () {
//     return view('goals');
// });

// Route::get('/parents', function () {
//     return view('parents');
// });

// Route::get('/achievement', function () {
//     return view('achievement');
// });

// Route::get('/school', function () {
//     return view('school');
// });

// Route::get('/college', function () {
//     return view('college');
// });

// Route::get('/university', function () {
//     return view('university');
// });

// Route::get('/photography', function(){
//     return view('photography');
// });

// Route::get('/indexN', function () {
//     return view('indexN');
// });