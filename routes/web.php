<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\MapController;
// ============================================
// HOME & REGISTRATION
// ============================================
Route::view('/home', 'home')->name('home');
Route::view('/', 'register')->name('register');

// ============================================
// PAGES (1-5)
// ============================================
Route::get('/page/{id}', [PageController::class, 'show'])
    ->where('id', '[1-5]')
    ->name('page.show');

// ============================================
// CUSTOMERS & ATTENDANCES (Resources)
// ============================================
Route::resource('customers', CustomerController::class);
Route::resource('attendances', AttendanceController::class);