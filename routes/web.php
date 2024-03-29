<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return Inertia::render('Profile/Show');
});

Route::get('/terms-and-conditions', function () {
    return Inertia::render('Pages/TermsAndConditions');
});

Route::prefix('profile')->group(function () {
    Route::get(
    		'/update',
    		[\App\Http\Controllers\ProfileController::class, 'update']
    	)->name('profile.update');
});

require __DIR__.'/auth.php';
