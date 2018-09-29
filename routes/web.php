<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);


Route::get('/map', 'MapController@index')->name('index');

Route::group(['prefix' => 'merch'], function () {

    // Route::get('/', 'MapController@index')->name('index');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdminUser']], function () {

    Route::get('/', function () {
        return view('admin.index');
    });


});

Route::group(['prefix' => 'manager', 'middleware' => ['auth', 'isManagerUser']], function () {

    Route::get('/', function () {
        return "Manager page";
    });


});

Route::group(['prefix' => 'merch', 'middleware' => ['auth', 'isMerchUser']], function () {

    Route::get('/', 'MapController@index')->name('merch.index');

    Route::get('/routes', function() {
        return 'Route lists here...';
    });

    Route::get('/point/{point}', function ($point) {
        return 'One trade point here...'.$point;
    });

});

Auth::routes();
