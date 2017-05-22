<?php


Route::get('/',function (){
    return '<h1>OK</h1>';
});

Route::group(['prefix' => 'compte'], function (){
    Route::get('profile','MemberController@profile');
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
