<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Greeting Page Route
Route::get('/greet', function () {
    return view('greet');
});

// Task Resource Routes (Handles CRUD)
Route::resource('tasks', TaskController::class);

// Fallback Route (Redirects to Greeting Page)
Route::fallback(function () {
    return redirect('/greet');
});

