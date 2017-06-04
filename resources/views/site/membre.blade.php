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
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection
