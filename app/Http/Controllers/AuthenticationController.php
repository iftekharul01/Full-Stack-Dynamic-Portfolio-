<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)){
            echo'<h1>Login Successful!</h1>';
        }
        else{
            echo '<h1>Login Failed!</h1>';
            }
    }

    public function registration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required',
        ]);

        User::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'student_id' => '221-15-53085',
            'phone' => '+880 175 9378005',
            'password'=> bcrypt($request->input('password'))
        ]);
    }
}
