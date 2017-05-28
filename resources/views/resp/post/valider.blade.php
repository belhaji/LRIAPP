@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des Evenements</h3>
    </div>
    <div id="row">
        @foreach( $posts as $post)
            <div class="col-md-4">
                <div class="well">
                    <h4>{{ $post->titre }}</h4>
                    <p>{{ $post->contenu }}</p>
                    <a class="btn btn-success" href="/admin/post/valider/{{$post->id}}">Valider</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
