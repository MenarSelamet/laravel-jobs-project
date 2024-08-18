<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
      public function create(){
        return view("auth.login");
    }

     public function store(){
       $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        Auth::attempt($validatedAttributes);
        request()->session()->regenerate();
        return redirect('/jobs');
    }

      public function destroy(){
       Auth::logout();
       return redirect("/");
    }
}