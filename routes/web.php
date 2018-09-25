<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::group(['prefix' => 'merch', 'middleware' => ['auth', 'isMerchUser']], function () {

    Route::get('/', 'MapController@index')->name('merch.index');

    Route::get('/routes', function() {
        return 'Route lists here...';
    });

    Route::get('/point/{point}', function ($point) {
        return 'One trade point here...'.$point;
    });

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdminUser']], function () {

    Route::get('/', function () {
        return view('admin.index');
    });


});

Auth::routes();
