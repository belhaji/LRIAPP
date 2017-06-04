@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des comptes non activer</h3>
    </div>
    <div id="row">
        @foreach( $members as $member)
            <div class="col-md-4">
                <div class="well">
                    <h4>{{ $member->email }}</h4>
                    <small>{{ $member->role }}</small>
                    <p>nom : {{ $member->infoPerso()->first()->nom }}</p>
                    <p>prenom : {{ $member->infoPerso()->first()->prenom }}</p>
                    <br>
                    <br>
                    <a class="btn btn-success" href="/resp/membre/valider/{{$member->id}}">Activer</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
