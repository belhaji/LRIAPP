@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des Posts</h3>
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
                    <p>{{ ($post->published == 0)? "non ": "" }} publier</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
