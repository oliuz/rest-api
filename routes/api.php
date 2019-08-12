<?php

use Illuminate\Http\Request;
use App\Mail\TokenApiShipped;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/create', 'API\RegisterController@register');


Route::group(['middleware' => ['auth:api']], function () {

   Route::get('/user', function (Request $request) {

        return $request->user();

   }); 

});




// Exception Route

Route::fallback(function () {

   return response(['status' => '404'], 404)
      ->header('Content-Type', 'text/plain');

});
