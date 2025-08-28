<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterUserController extends Controller
{
    public function create (){
        return view('auth.register');
    }

    public function store (){
        $attributes = request()->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:8',
            'password_confirmation'=> 'required|min:8',
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return Redirect('/jobs');
    }
}
