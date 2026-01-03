<?php
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        "greeting" => "Yo",
        "name" => "Taylor",
    ]);
});


Route::get("/jobs", function ()  {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('components.jobs.index', ["jobs" => $jobs]);

});

Route::get("/jobs/create", function ()  {
    return view('components.jobs.create');
});


Route::post("/jobs", function ()  {
    // validation
    Job::create([
        "title" => request('title'),
        "salary" => request('salary'),
        "employer_id" => 1,
    ]);
    return redirect("/jobs");
});

Route::get("/jobs/{id}", function ($id)  {

    $job = Job::find($id);
    return view('components.jobs.show',["job" => $job]);
});



Route::get("/contact", function () {
    return view('contact');
});
