<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/map', 'MapController@index')->name('index');

Route::group(['prefix' => 'merch'], function () {

    // Route::get('/', 'MapController@index')->name('index');

    Route::get('/routes', function() {
        return 'Route lists here...';
    });

    Route::get('/point/{point}', function ($point) {
        return 'One trade point here...'.$point;
    });

});


Route::group(['prefix' => 'manager'], function () {

    Route::get('/', function () {
        return 'Main page manager...';
    });

});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return 'Main page admin...';
    });


});


Auth::routes();
