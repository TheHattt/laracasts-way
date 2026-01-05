<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('components.jobs.index', ['jobs' => $jobs]);

    }

    public function show(Job $job)
    {

        return view('components.jobs.show', ['job' => $job]);
    }

    public function store()
    {
        // validation
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required',
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        // mail notification to user

        Mail::to($job->employer->user)->queue(new JobPosted($job));

        return redirect('/jobs');
    }

    public function create()
    {

        return view('components.jobs.create');
    }

    public function update(Job $job)
    {
        // validate
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required',
        ]);
        // authorize

        // update job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        // persist
        $job->save();

        // redirect
        return redirect('/jobs/'.$job->id);

    }

    public function edit(Job $job)
    {
        /*        if(Auth::user()->cannot('edit-job', $job)) {
                    dd(" You are not authorized to edit this job ");
                }*/

        Gate::authorize('edit-job', $job);

        return view('components.jobs.edit', ['job' => $job]);
    }

    public function destroy(Job $job)
    {
        // authorize job deletion

        $job->delete();

        return redirect('/jobs');
    }
}
