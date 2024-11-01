<?php

use App\Http\Controllers\landingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', [landingPage::class, 'index'])->name('home');
Route::get('/about', [landingPage::class, 'about'])->name('about');
