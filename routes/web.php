<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/goals', function () {
    return view('goals');
});

Route::get('/parents', function () {
    return view('parents');
});

Route::get('/achievement', function () {
    return view('achievement');
});

Route::get('/school', function () {
    return view('school');
});

Route::get('/college', function () {
    return view('college');
});

Route::get('/university', function () {
    return view('university');
});

Route::get('/photography', function(){
    return view('photography');
});