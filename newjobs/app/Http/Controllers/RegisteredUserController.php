<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
class RegisteredUserController extends Controller
{
    public function create(){
        return view("auth.register");
    }
     public function store(){
      $validatedAttributes =  request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'password'=> ['required', Password::min(6), 'confirmed'],
        'password_confirmation'=>['required'],
    ]);

    $user = User::create($validatedAttributes);

    Auth::login($user);

    return redirect('/jobs');
    }
}