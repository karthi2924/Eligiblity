<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/eligibility', function () {
//     return view('eligibility.create');
// });
use App\Http\Controllers\VerificationController;

Route::get('/', [VerificationController::class, 'create'])->name('eligibility.create');
Route::post('/eligibility', [VerificationController::class, 'store'])->name('eligibility.store');
