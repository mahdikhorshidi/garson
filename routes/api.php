<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('v1')->namespace('Api\v1')->group(function() {
    Route::resource('/user' , 'UserController');
    Route::resource('/role' , 'RoleController');
    Route::resource('/resturant' , 'ResturantController');
    Route::resource('/item' , 'ItemController');
    Route::resource('/seat' , 'SeatController');
});