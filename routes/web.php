<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\PagesController::class, 'homePage'])->name('home');
Route::post('/store-email', [App\Http\Controllers\PagesController::class, 'storeEmail'])->name('store-email');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');

//contact routes
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');


//portfolio routes
Route::resource('photos', \App\Http\Controllers\PhotosController::class);
Route::resource('pricing', \App\Http\Controllers\PricingController::class);
Route::delete('/pricing/{id}/destroy', [App\Http\Controllers\PricingController::class, 'destroy'])->name('pricing.destroy');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
