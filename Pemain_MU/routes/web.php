<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [\App\Http\Controllers\PemainController::class, 'index']);
