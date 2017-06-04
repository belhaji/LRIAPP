@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Equipe "{{$equipe->nom}}"</h3>
    </div>
    <div id="row">
        @foreach( $members as $member)
            <div class="col-md-4">
                <div class="well">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/user.png" width="70" class="img-circle"/>
                        </div>
                        <div class="col-md-8">
                            <h4>
                                {{ $member->infoPerso()->first()->nom }}
                                {{ $member->infoPerso()->first()->prenom }}
                            </h4>
                            <small class="">
                                {{ $member->role }}
                            </small>
                            <br>
                            <br>
                            <a href="/resp/equipe/{{$equipe->id}}/member/{{$member->id}}" class="btn btn-success">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
