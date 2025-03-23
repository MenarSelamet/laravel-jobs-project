<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestJobs = Job::with(['employer', 'tags'])
            ->latest()
            ->take(6)
            ->get();

        return view('home', [
            'latestJobs' => $latestJobs
        ]);
    }
}
