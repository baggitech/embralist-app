<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    Route::get('/account', [AccountController::class, 'index'])->name('account.get');
    Route::post('/account/profile', [AccountController::class, 'profile'])->name('account.profile');



});