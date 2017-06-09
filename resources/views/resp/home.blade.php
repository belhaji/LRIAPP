@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Bienvenue {{ $user->infoPerso()->first()->prenom }} {{ $user->infoPerso()->first()->nom }}</h3>
    </div>
@endsection
