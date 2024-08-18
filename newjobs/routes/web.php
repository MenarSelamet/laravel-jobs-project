<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Index
Route::get('/jobs', function ()  {
    $jobs=Job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index',['jobs'=> $jobs] );   
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Show
Route::get('/jobs/{job}', function (Job $job)  {
    return view('jobs.show', ['job'=> $job]);
});

// Edit
Route::get('/jobs/{job}/edit', function (Job $job)  {
    return view('jobs.edit', ['job'=> $job]);
});

// Update
Route::patch('/jobs/{job}', function (Job $job)  {
 request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
   
//    $job->title= request('title');
//    $job->salary= request('salary');
//    $job->save();

   $job->update([
    'title'=> request('title'),
    'salary'=> request('salary'),
   ]);

   return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{job}', function (Job $job)  {
   $job->delete();
  return redirect('/jobs');
});