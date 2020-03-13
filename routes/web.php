<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('about','SiteController@index');
Route:: get ('typebooks','TypeBooksController@index')->name('typebooks');
Route:: get ('typebooks/destroy/{id}','TypeBooksController@destroy') ;

Route::resource('book','BooksController')->name('index','books');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
