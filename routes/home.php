<?php

//Logs
//Route::resource('logs', 'LogController');
//Route::get('logs/{model}/{json}', 'LogControllerapi@json');
//Roles
Route::resource('role','RoleController');
//Users
Route::resource('user', 'UserController');
//Users
Route::resource('resturant', 'ResturantController');
//Items
Route::resource('item', 'ItemController');
//Seats
Route::resource('seat', 'SeatController');
