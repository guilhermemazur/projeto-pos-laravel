<?php
/**
 * Authenticated routes
 * Middleware 'auth', 'web'
 * Prefix pagination
 */

Route::get('users', 'UserController@pagination')->name('pagination.users');
Route::get('cars', 'CarController@pagination')->name('pagination.cars');
