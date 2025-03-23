<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $jobs = Job::with('employer', 'tags')->latest()->paginate(4);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'salary' => ['required'],
            'tags' => ['array'],
            'tags.*' => ['exists:tags,id']
        ]);

        // Get the authenticated user's employer
        $employer = auth()->user()->employer;
        
        if (!$employer) {
            // Create an employer for the user if they don't have one
            $employer = Employer::create([
                'user_id' => auth()->id(),
                'name' => auth()->user()->first_name . ' ' . auth()->user()->last_name . '\'s Company'
            ]);
        }

        $attributes['employer_id'] = $employer->id;

        // Create the job
        $job = Job::create($attributes);

        // Attach tags
        if (isset($attributes['tags'])) {
            $job->tags()->attach($attributes['tags']);
        }

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job->load('employer', 'tags')
        ]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job,
            'tags' => Tag::all()
        ]);
    }

    public function update(Job $job)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'salary' => ['required'],
            'tags' => ['array'],
            'tags.*' => ['exists:tags,id']
        ]);

        $job->update([
            'title' => $attributes['title'],
            'description' => $attributes['description'],
            'salary' => $attributes['salary']
        ]);

        // Sync tags
        if (isset($attributes['tags'])) {
            $job->tags()->sync($attributes['tags']);
        } else {
            $job->tags()->detach();
        }

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
