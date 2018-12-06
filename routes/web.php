<?php

Route::get('/', function () {
    return redirect('/posts');
});

Auth::routes();

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');

Route::resource('comments', 'CommentController');

Route::get('/search', 'SearchController@searchPosts')->name('searchPosts');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::get('/posts', 'AdminController@posts')->name('admin.posts');
    Route::get('/comments', 'AdminController@comments')->name('admin.comments');
});
