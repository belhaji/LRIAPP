<?php


Route::get('/', function () {
    return '<h1>OK</h1>';
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function (){
       return view('admin.home');
    });


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

    // membres
    Route::get('membre/valider', 'AdminController@validerMembreList');
    Route::get('membre/valider/{id}', 'AdminController@validerMembre');


});



Route::group(['prefix' => 'doct'], function () {

    Route::get('/', function (){
       return view('doct.home');
    });

    // posts
    Route::get('post/new', function () {
        return view('doct.post.new');
    });
    Route::post('post', 'DoctorantController@addPost');
    Route::get('post/list', 'DoctorantController@listPosts');
    Route::get('post/delete/{id}', 'DoctorantController@deletePost');

    // membres
    Route::get('membres', 'DoctorantController@membreList');

    // CV
    Route::get('info', 'DoctorantController@infoPerso');
    Route::get('info/editer', 'DoctorantController@infoPersoEditer');
    Route::post('info/editer', 'DoctorantController@infoPersoEditer');

    // Formation
    Route::get('formation', 'DoctorantController@formation');
    Route::get('formation/delete/{id}', 'DoctorantController@formationDelete');
    Route::post('formation', 'DoctorantController@formation');

    // Experiences
    Route::get('experience', 'DoctorantController@experience');
    Route::get('experience/delete/{id}', 'DoctorantController@experienceDelete');
    Route::post('experience', 'DoctorantController@experience');

    // Pubs
    Route::get('pub', 'DoctorantController@publication');
    Route::get('pub/delete/{id}', 'DoctorantController@publicationDelete');
    Route::post('pub', 'DoctorantController@publication');

    // Projets
    Route::get('projet', 'DoctorantController@projet');
    Route::get('projet/delete/{id}', 'DoctorantController@projetDelete');
    Route::post('projet', 'DoctorantController@projet');


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
