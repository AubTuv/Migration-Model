<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Greeting route
Route::get('/greet', [GreetController::class, 'index'])->name('greet');

// Task resource routes
Route::resource('tasks', TaskController::class);

// Fallback route (redirect to greet page if not found)
Route::fallback(function () {
    return redirect()->route('greet');
});


