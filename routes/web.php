<?php


Route::get('/', function () {
    dd(\App\Domaine::with('sousDomaines')->get());
});
