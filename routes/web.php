<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('homepage.registration');
})->name('registration');

Route::get('/', [TestController::class,'getdata'])->name('getdata');
Route::post('/registration', [TestController::class,'regStore'])->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
