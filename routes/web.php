<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/skills.blade.php', function () {
    return view('skills');
});

Route::get('/goals.blade.php', function () {
    return view('goals');
});

Route::get('/parents.blade.php', function () {
    return view('parents');
});

Route::get('/achievement.blade.php', function () {
    return view('achievement');
});

Route::get('/school.blade.php', function () {
    return view('school');
});

Route::get('/college.blade.php', function () {
    return view('college');
});

Route::get('/university.blade.php', function () {
    return view('university');
});

Route::get('/photography.blade.php', function(){
    return view('photography');
});