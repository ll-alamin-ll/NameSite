<?php

Route::get('/', [
    'uses' => 'NameController@index',
    'as'    => '/',
    ]);

Route::get('/boys', [
    'uses' => 'NameController@boys',
    'as'    => 'boys',
]);

Route::get('/girls', [
    'uses' => 'NameController@girls',
    'as'    => 'girls',
]);

//Route::get('/login', [
//    'uses' => 'NameController@login',
//    'as'    => 'login',
//]);

Route::get('/namedetails', [
    'uses' => 'NameController@namedetails',
    'as'    => 'namedetails',
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Insert Name
Route::get('/insert/name', 'NameController@insertname')->name('insertname');
