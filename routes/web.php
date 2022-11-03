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
Route::delete('/photos/{id}/destroy', [App\Http\Controllers\PhotosController::class, 'destroy'])->name('photos.destroy');

//filter Routes
//Route::resource('filters', \App\Http\Controllers\FiltersController::class);
Route::get('/wedding', [App\Http\Controllers\FiltersController::class, 'wedding'])->name('filters.wedding');
Route::get('/outdoor', [App\Http\Controllers\FiltersController::class, 'outdoor'])->name('filters.outdoor');
Route::get('/family', [App\Http\Controllers\FiltersController::class, 'family'])->name('filters.family');
Route::get('/pregnant', [App\Http\Controllers\FiltersController::class, 'pregnant'])->name('filters.pregnant');
Route::get('/portrait', [App\Http\Controllers\FiltersController::class, 'portrait'])->name('filters.portrait');
Route::get('/couple', [App\Http\Controllers\FiltersController::class, 'couple'])->name('filters.couple');
Route::get('/nature', [App\Http\Controllers\FiltersController::class, 'nature'])->name('filters.nature');
Route::get('/creative', [App\Http\Controllers\FiltersController::class, 'creative'])->name('filters.creative');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminHome'])->name('admin');
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'allUsers'])->name('users');
    Route::get('/admin/messages', [App\Http\Controllers\AdminController::class, 'allMessages'])->name('messages');
    Route::get('/admin/emails', [App\Http\Controllers\AdminController::class, 'mailing'])->name('mailing');
    Route::get('/admin/emails/export', [App\Http\Controllers\AdminController::class, 'exportMails'])->name('export.mails');
    Route::post('/admin/makeModerator', [\App\Http\Controllers\AdminController::class, 'makeModerator'])->name('makeModerator');
    Route::post('/admin/makeAdmin', [\App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('makeAdmin');
    Route::post('/admin/makeClient', [\App\Http\Controllers\AdminController::class, 'makeClient'])->name('makeClient');
    Route::delete('/admin/{id}/delete', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('delete.user');
    Route::delete('/admin/contact/{id}/destroy', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.destroy');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
