<?php
/**
 * Unauthenticated routes for Api
 * Prefix 'api/v1'
 * Namespace 'App\Http\Controllers\Api\v1'
 */

Route::get('/status', 'StatusController@status')->name('status');