<?php

namespace App\Http\Controllers;


use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke() {
        $jobs = job::where('title', 'like', '%'.request('q').'%')->get() ;
        return view('jobs.results', ['jobs' => $jobs]);
    }
}
