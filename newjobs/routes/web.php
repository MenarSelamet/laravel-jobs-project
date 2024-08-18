<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Index
Route::get('/jobs', [JobController::class, 'index']); 

// Create
Route::get('/jobs/create', [JobController::class, 'create']);

// Store
Route::post('/jobs', [JobController::class,'store']);

// Show
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Edit
Route::get('/jobs/{job}/edit', [JobController::class,'edit']);

// Update
Route::patch('/jobs/{job}',[JobController::class,'update']);

// Destroy
Route::delete('/jobs/{job}', [JobController::class,'destroy']);