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

Route::middleware(['web'])->namespace(config('messenger.controller_namespace'))->group(function () {
    Route::get(config('messenger.index'), 'MessagesController@'.config('messenger.controller_index'));
    Route::get(config('messenger.create'), 'MessagesController@'.config('messenger.controller_create'));
    Route::post(config('messenger.store'), 'MessagesController@'.config('messenger.controller_store'));
});
