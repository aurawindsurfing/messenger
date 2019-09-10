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

Route::middleware(['web'])->namespace('Aurawindsurfing\Messenger\Http\Controllers')->group(function () {
    Route::get(config('messenger.index'), 'MessagesController@index');
    Route::get(config('messenger.create'), 'MessagesController@create');
    Route::post(config('messenger.store'), 'MessagesController@store');
});
