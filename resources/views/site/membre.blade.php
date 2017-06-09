@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Nos membres</h2>
        </div>
    </div>
    <div class="fullwidth-block" data-bg-color="#edf2f4">
        <div class="container">
            <div class="row">
                @foreach( $membres as $member)
                    <div class="col-md-6">
                        <div class="well" style="background-color: white">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="/cv/{{$member->id}}">
                                        <img src="/img/user.png" width="70" class="img-circle"/>
                                    </a>
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
                            <div class="row" style="padding: 10px;">
                                <h3>Equipes</h3>
                                <ul class="list-group">
                                    @foreach($member->equipes()->get() as $equipe)
                                        <li class="list-group-item">
                                            <h4>{{ $equipe->nom }}</h4>
                                            <ul class="list-group">
                                                @foreach($equipe->members()->get() as $m)
                                                    <a href="/cv/{{$m->id}}">
                                                        <li class="list-group-item">{{ $m->infoPerso()->first()->nom }}</li>
                                                    </a>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection
