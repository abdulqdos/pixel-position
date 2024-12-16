<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\tagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [jobController::class, 'index']);
Route::get('/job/create', [jobController::class, 'create'])->middleware('auth');
Route::post('/job', [jobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job:title}', [jobController::class, 'show']);



Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', tagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register' , [RegisteredUserController::class, 'create']);
    Route::post('/register' , [RegisteredUserController::class, 'store']);

    Route::get('/login' , [SessionController::class, 'create']);
    Route::post('/login' , [SessionController::class, 'store']);

});

Route::delete('/logout' , [SessionController::class, 'destroy'])->middleware('auth');