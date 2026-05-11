<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.details');
