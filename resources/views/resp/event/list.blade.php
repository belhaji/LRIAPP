@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des Evenements</h3>
    </div>
    <div id="row">
        @foreach( $events as $event)
            <div class="col-md-4">
                <div class="well">
                    <h4>{{ $event->titre }}</h4>
                    <small>{{ $event->date }} à {{ $event->lieux }}</small>
                    <p>{{ $event->description }}</p>
                    <small class="text-muted">{{($event->published) ? 'publier' : 'ne pas publier'}}</small>
                    <br>
                    <br>
                    <a class="btn btn-danger" href="/admin/evenement/delete/{{$event->id}}">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
