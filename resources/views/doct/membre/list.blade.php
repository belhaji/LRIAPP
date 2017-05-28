@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des membres</h3>
    </div>
    <div id="row">
        @foreach( $membres as $member)
            <div class="col-md-4">
                <div class="well">
                    <h4>{{ $member->email }}</h4>
                    <small>{{ $member->role }}</small>
                    <p>nom : {{ $member->infoPerso()->first()->nom }}</p>
                    <p>prenom : {{ $member->infoPerso()->first()->prenom }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
