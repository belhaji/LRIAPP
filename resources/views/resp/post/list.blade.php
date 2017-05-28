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
                    <small class="text-muted">{{($post->published) ? 'publier' : 'ne pas publier'}}</small>
                    <br>
                    <br>
                    <a class="btn btn-danger" href="/admin/post/delete/{{$post->id}}">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
