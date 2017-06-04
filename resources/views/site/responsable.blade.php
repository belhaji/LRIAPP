@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Nos directeurs de theses</h2>
        </div>
    </div>
    <div class="fullwidth-block" data-bg-color="#edf2f4">
        <div class="container">
            <div class="row">
                @foreach($responsables as $responsable)
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/user.png" width="80px" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>
                                    {{ $responsable->infoPerso()->first()->nom }}
                                    {{ $responsable->infoPerso()->first()->prenom }}
                                </h3>
                                <p>{{ $responsable->infoPerso()->first()->bio }}</p>
                                <small>
                                    {{ $responsable->email }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection
