<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3); // For pagination

        // $jobs = Job::with('employer')->get();

        // $jobs = Job::all(); // You can't use this line of code if lazy loading is disabled check out from app/Providers/AppServiceProvider.php
        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
            ]
        );
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        // $job = Job::find(($id));
        // // dd($job);
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // authorize (On hold...)

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // $job = Job::findOrFail($id);

        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        // authorize (On hold...)

        // $job = Job::findOrFail($id);
        $job->delete();

        // OR

        // Job::findOrFail($id)->delete();

        return redirect('/jobs');
    }
}
