<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/',[NewController::class ,'index'])->name('index');
Route::get('/about',[NewController::class ,'about'])->name('about');
Route::get('/blog',[NewController::class ,'blog'])->name('blog');
Route::get('/booking',[NewController::class ,'booking'])->name('booking');
Route::get('/contact',[NewController::class ,'contact'])->name('contact');
Route::get('/destination',[NewController::class ,'destination'])->name('destination');
Route::get('/gallery',[NewController::class ,'gallery'])->name('gallery');
Route::get('/guides',[NewController::class ,'guides'])->name('guides');
Route::get('/packages',[NewController::class ,'packages'])->name('packages');
Route::get('/services',[NewController::class ,'services'])->name('services');
Route::get('/testimonial',[NewController::class ,'testimonial'])->name('testimonial');
Route::get('/tour',[NewController::class ,'tour'])->name('tour');

Route::get('/form',[TestController::class,'form'])->name('form');
Route::post('/form_data',[TestController::class,'form_data'])->name('form_data');


//
