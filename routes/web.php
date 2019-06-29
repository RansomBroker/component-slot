<?php

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

// route for includes file

Route::get('/', function(){
  return view('layouts.includes.css')->name('css');
});

Route::get('/', function(){
  return view('layouts.includes.js')->name('js');
});


// show home
Route::get('/', function () {
    return view('layouts.partials.home');
});
