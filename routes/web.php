<?php


Route::get('/', function () {
    return '<h1>OK</h1>';
});


Route::group(['prefix' => 'admin'], function () {
    // events
    Route::get('evenement/new', function () {
        return view('admin.event.new');
    });
    Route::post('evenement', 'AdminController@addEvent');
    Route::get('evenement/list', 'AdminController@listEvents');
    Route::get('evenement/valider', 'AdminController@validerEvents');
    Route::get('evenement/valider/{id}', 'AdminController@validerEvents');
    Route::get('evenement/delete/{id}', 'AdminController@deleteEvent');
    // posts
    Route::get('post/new', function () {
        return view('admin.post.new');
    });
    Route::post('post', 'AdminController@addPost');
    Route::get('post/list', 'AdminController@listPosts');
    Route::get('post/valider', 'AdminController@validerPosts');
    Route::get('post/valider/{id}', 'AdminController@validerPosts');
    Route::get('post/delete/{id}', 'AdminController@deletePost');


});


Route::get('inscription', function () {
    return view('user.inscription');
});
Route::post('inscription', 'MemberController@signUp');


Route::get('login', function () {
    return view('user.login');
});
Route::get('logout', 'MemberController@logout');
Route::post('login', 'MemberController@login');
