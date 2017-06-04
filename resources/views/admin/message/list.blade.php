@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des Messages</h3>
    </div>
    <div id="row">
        @foreach( $messages as $message)
            <div class="row message">
                <div class="col-md-2">
                    <img src="/img/msg.png" alt="">
                </div>
                <div class="col-md-10">
                    <h3>{{ $message->nom }}</h3>
                    <small>{{ $message->created_at }}</small>
                    <small>{{ $message->email }}</small>
                    <p>{{ $message->message }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
