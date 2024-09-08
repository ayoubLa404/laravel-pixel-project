<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()
            ->with(['employer', 'tags'])
            ->get()
            ->groupBy('featured');
        $tags = Tag::all();

        return view('jobs.index', [
            'jobs' => $jobs[0],
            'featuredJobs' => $jobs[1],
            'tags' => $tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formAttrs = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'url'],
            'tags' => ['nullable'],
        ]);

        $formAttrs['featured'] = $request->has('featured');

        // create job post for the employer which is the current auth user
        $job = Auth::user()->employer->jobs()->create(Arr::except($formAttrs, 'tags'));

        if ($formAttrs['tags']) {
            // explode like split in js
            foreach (explode(',', $formAttrs['tags']) as $tag) {
                $job->assignTag($tag);
            }
        }

        return redirect()->route('home');
    }
}
