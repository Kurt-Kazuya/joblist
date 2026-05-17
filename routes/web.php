<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; 

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); 

    return view('job-detail', ['job' => $job]);
});