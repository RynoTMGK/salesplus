<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', 'login', 301);

Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/agent', function () {
    return Inertia::render('Agent', ["page" => "Agent"]);
});

Route::get('/contact', function () {
    return Inertia::render('Contact', ["page" => "Contact"]);
});

Route::resource('/lead', LeadController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);


require __DIR__ . '/auth.php';
