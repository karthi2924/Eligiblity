<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/eligibility', function () {
    return view('eligibility.create');
});