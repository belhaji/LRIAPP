@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des membres</h3>
    </div>
    <div id="row">
        @foreach( $membres as $member)
            <div class="col-md-4">
                <a href="/cv/{{$member->id}}">
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
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
