<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs',[
        "jobs"=> [
            [
            'title'=> 'Director',
            'salary'=> '$50,000'
        ],
         [
            'title'=> 'Programmer',
            'salary'=> '$10,000'
         ],
          [
            'title'=> 'Teacher',
            'salary'=> '$40,000'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact');
});