<?php

use App\Models\Job;

// home
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Yo',
        'name' => 'Taylor',
    ]);
});

// list jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('components.jobs.index', ['jobs' => $jobs]);

});

// create job
Route::get('/jobs/create', function () {
    return view('components.jobs.create');
});

// store job
Route::post('/jobs', function () {
    // validation

    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// show job
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('components.jobs.show', ['job' => $job]);
});

// edit job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('components.jobs.edit', ['job' => $job]);
});


// update job
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);
    // authorize



    // update job
    $job = Job::findOrFail($id);
    $job-> update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    // persist
    $job->save();
    // redirect
    return redirect('/jobs/' . $id);

});


// delete job
Route::delete('/jobs/{id}', function ($id) {
    // authorize job deletion
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

// contact
Route::get('/contact', function () {
    return view('contact');
});
