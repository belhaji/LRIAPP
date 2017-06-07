<?php


Route::get('/', 'SiteController@home');
Route::get('/events', 'SiteController@events');
Route::get('/posts', 'SiteController@posts');
Route::get('/presentation', 'SiteController@presentation');
Route::get('/directeurs', 'SiteController@directeurs');
Route::get('/membres', 'SiteController@membres');
Route::get('/themes', 'SiteController@themes');
Route::get('/contact', 'SiteController@contact');
Route::post('/message', 'AdminController@messages');
Route::get('/recherche', 'SiteController@recherche');


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
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

    // info du site
    Route::get('infosite', 'AdminController@infosite');
    Route::post('infosite', 'AdminController@infosite');

    // membres

    Route::get('membre', 'AdminController@membreList');
    Route::get('membre/valider', 'AdminController@validerMembreList');
    Route::get('membre/valider/{id}', 'AdminController@validerMembre');

    // Messages
    Route::get('message', 'AdminController@messages');


    // password
    Route::get('password', 'AdminController@changerPassword');
    Route::post('password', 'AdminController@changerPassword');



});


Route::group(['prefix' => 'doct'], function () {

    Route::get('/', function () {
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


    // CV
    Route::get('cv', 'DoctorantController@cv');

    // password
    Route::get('password', 'DoctorantController@changerPassword');
    Route::post('password', 'DoctorantController@changerPassword');


});


Route::group(['prefix' => 'resp'], function () {

    Route::get('/', function () {
        return view('resp.home');
    });

    // events
    Route::get('evenement/new', function () {
        return view('resp.event.new');
    });
    Route::post('evenement', 'ResponsableController@addEvent');
    Route::get('evenement/list', 'ResponsableController@listEvents');
    Route::get('evenement/delete/{id}', 'ResponsableController@deleteEvent');


    // posts
    Route::get('post/new', function () {
        return view('resp.post.new');
    });
    Route::post('post', 'ResponsableController@addPost');
    Route::get('post/list', 'ResponsableController@listPosts');
    Route::get('post/delete/{id}', 'ResponsableController@deletePost');

    // membres
    Route::get('membres', 'ResponsableController@membreList');
    Route::get('membres/valider', 'ResponsableController@validerMembreList');
    Route::get('membre/valider/{id}', 'ResponsableController@validerMembre');

    // Equipes
    Route::get('equipe', 'ResponsableController@equipe');
    Route::post('equipe', 'ResponsableController@equipe');
    Route::get('equipe/delete/{id}', 'ResponsableController@deleteEquipe');
    Route::get('equipe/{id}', 'ResponsableController@voirEquipe');
    Route::get('equipe/{id}/add', 'ResponsableController@addToEquipe');
    Route::get('equipe/{id}/member/{memberId}', 'ResponsableController@addMemberEquipe');
    Route::get('equipe/{id}/delete/{memberId}', 'ResponsableController@deleteMemberEquipe');

    // CV
    Route::get('info', 'ResponsableController@infoPerso');
    Route::get('info/editer', 'ResponsableController@infoPersoEditer');
    Route::post('info/editer', 'ResponsableController@infoPersoEditer');

    // Formation
    Route::get('formation', 'ResponsableController@formation');
    Route::get('formation/delete/{id}', 'ResponsableController@formationDelete');
    Route::post('formation', 'ResponsableController@formation');

    // Experiences
    Route::get('experience', 'ResponsableController@experience');
    Route::get('experience/delete/{id}', 'ResponsableController@experienceDelete');
    Route::post('experience', 'ResponsableController@experience');

    // Pubs
    Route::get('pub', 'ResponsableController@publication');
    Route::get('pub/delete/{id}', 'ResponsableController@publicationDelete');
    Route::post('pub', 'ResponsableController@publication');

    // Projets
    Route::get('projet', 'ResponsableController@projet');
    Route::get('projet/delete/{id}', 'ResponsableController@projetDelete');
    Route::post('projet', 'ResponsableController@projet');


    // CV
    Route::get('cv', 'ResponsableController@cv');

    // password
    Route::get('password', 'ResponsableController@changerPassword');
    Route::post('password', 'ResponsableController@changerPassword');

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

Route::get('cv/{id}', 'MemberController@cv');

