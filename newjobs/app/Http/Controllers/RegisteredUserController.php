<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(){
        return view("auth.register");
    }
     public function store(){
        request()->validate([
        'first_name' => ['required', 'min:3'],
        'last_name' => ['required', 'min:3'],
        'email' => ['required'],
        'password'=> ['required'],
        'password_confirmation'=> ['required'],
        
    ]);

    User::create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
       'email' => request('email'),
        'password'=> request('password'),
        'password_confirmation'=> request('password_confirmation'),
    ]);

    return redirect('/');
    }
}