<?php


use App\Http\Controllers\PagesController;

Route::view('/', 'welcome')->name('welcome');
Route::view('/fees-appointments', 'appointments')->name('appointments');

Route::get('/our-doctors', [PagesController::class,'doctors'])->name('doctors');
Route::get('/our-doctors/{slug}', [PagesController::class,'singleDoctors'])->name('singleDoctors');


Route::view('/our-services', 'services')->name('services');
Route::view('/our-practice', 'practice')->name('practice');
Route::view('/about-us', 'about')->name('about');
Route::view('/our-contacts', 'contacts')->name('contacts');
Route::post('/contact',[PagesController::class,'sendContacts'])->name('SendContacts');
Route::post('/search',[PagesController::class,'search'])->name('search');
