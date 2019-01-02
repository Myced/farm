<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/regions', 'AdminController@regions')->name('regions');

    Route::group(['prefix' => 'division'], function(){
        Route::get('/', 'DivisionController@index')->name('divisions');
        Route::post('/store', 'DivisionController@store')->name('division.store');
        Route::get('/destroy/{id}', 'DivisionController@destroy')->name('division.destroy');
    });

    Route::group(['prefix' => 'sub-division'], function(){
        Route::get('/', 'SubDivisionController@index')->name('subdivisions');
    });

    Route::group(['prefix' => 'village'], function(){
        Route::get('/', 'VillageController@index')->name('villages');
    });
});
