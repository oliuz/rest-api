<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\TokenApiShipped;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/mail', function () {
//     Mail::to('dmpb019@gmail.com')->send(new TokenApiShipped);
// });
