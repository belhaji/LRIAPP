@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des Evenements</h3>
    </div>
    <div id="row">
        @foreach($posts as $post )
            <div class="row message">
                <div class="col-md-2">
                    <img src="/img/post.png" alt="">
                </div>
                <div class="col-md-10">
                    <h3 class="">{{$post->titre}}</h3>
                    <small class="date pull-right">{{ $post->created_at }}</small>
                    <p>{{ $post->contenu }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
