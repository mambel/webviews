<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');


//Route::resource('portfolio','PortfolioController');
//Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');

Route::get('/portfolio','PortfolioController@index',)->name('portfolio');


Route::post('contact','MessagesController@store');
