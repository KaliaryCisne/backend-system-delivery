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

Route::prefix('v1')->namespace('Api\V1')->group(function () {
    Route::prefix('delivery')->namespace('Delivery')->group(function () {
        Route::post('create', 'CreateController@create')->name('create');
        Route::get('list', 'ListController@list')->name('list');
    });
});
