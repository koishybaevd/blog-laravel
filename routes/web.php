<?php

Route::get('/', function () {
    return redirect('/posts');
});

Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
