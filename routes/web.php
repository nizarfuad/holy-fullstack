<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LoginUserController;


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/donation', [RankController::class, 'index'])->name('donation');

Route::get('/login', [LoginUserController::class, 'index'])->name('lp-loginPage');
Route::post('/authenticate', [LoginUserController::class, 'authenticate'])->name('lp-authenticate');
Route::get('/logout', [LoginUserController::class, 'logout'])->name('lp-logout')->middleware('luckperms.auth');
