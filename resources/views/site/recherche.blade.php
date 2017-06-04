@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Recherche </h2>
        </div>
    </div>
    <div class="fullwidth-block" data-bg-color="#edf2f4">
        <div class="container">
            <div id="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Membres</div>
                    <div class="panel-body">
                        @foreach( $members as $member)
                            <div class="col-md-4">
                                <a href="/cv/{{$member->member()->first()->id}}">
                                    <div class="well">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/img/user.png" width="70" class="img-circle"/>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>
                                                    {{ $member->nom }}
                                                    {{ $member->prenom }}
                                                </h4>
                                                <small class="">
                                                    {{ $member->member()->first()->role }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Evenement</div>
                    <div class="panel-body">
                        @foreach( $events as $event)

                            <div class="message row">
                                <div class="col-md-2">
                                    <img src="/img/event.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="">{{ $event->titre }}</h3>
                                    <small class="date pull-right">{{ $event->created_at }}</small>
                                    <small>{{ $event->date }} à {{ $event->lieux }}</small>
                                    <p>{{ $event->description }}</p>
                                    <small class="text-muted">{{($event->published) ? 'publier' : 'ne pas publier'}}</small>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div id="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Evenement</div>
                    <div class="panel-body">
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
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection
