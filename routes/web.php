<?php


use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'index'])->name('welcome');
Route::get('/fees-appointments',[PagesController::class,'appointments'])->name('appointments');

Route::get('/our-doctors', [PagesController::class,'doctors'])->name('doctors');
Route::get('/our-doctors/{slug}', [PagesController::class,'singleDoctors'])->name('singleDoctor');


Route::get('/our-services', [PagesController::class,'services'])->name('services');
Route::view('/our-practice', 'practice')->name('practice');
Route::view('/about-us', 'about')->name('about');
Route::view('/our-contacts', 'contacts')->name('contacts');

Route::post('/contact',[PagesController::class,'sendContacts'])->name('SendContacts');
Route::post('/search',[PagesController::class,'search'])->name('search');

Route::post('/booking',[PagesController::class,'postBooking'])->name('postBooking');

Route::get('/blogs',[PagesController::class,'blogs'])->name('blogs');
Route::get('/blogs/{slug}',[PagesController::class,'singleBlog'])->name('singleBlog');
