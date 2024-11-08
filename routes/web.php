<?php

use App\Http\Controllers\landingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', [landingPage::class, 'index'])->name('home');
Route::get('/about', [landingPage::class, 'about'])->name('about');
Route::get('/order', [landingPage::class, 'order'])->name('order');
Route::get('/package', [landingPage::class, 'package'])->name('package');
Route::get('/menuGallery', [landingPage::class, 'menuGallery'])->name('menuGallery');
Route::get('/jobDetail', [landingPage::class, 'jobDetail'])->name('jobDetail');
Route::get('/jobList', [landingPage::class, 'jobList'])->name('jobList');
Route::get('/contact', [landingPage::class, 'contact'])->name('contact');
Route::get('/testimonial', [landingPage::class, 'testimonial'])->name('testimonial');
