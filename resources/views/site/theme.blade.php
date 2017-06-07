@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Les thèmes de recherche </h2>
        </div>
    </div>
    <div class="fullwidth-block" data-bg-color="#edf2f4">
        <div class="container">
            <div class="row">
                @foreach($domaines as $domaine)
                    <h3> {{ $domaine->titre }} </h3>
                    <div class="list-group">
                        @foreach( $domaine->sousDomaines()->get() as $sd)
                            <a href="https://www.google.com/?q={{ $sd->titre }}#safe=active&q={{ $sd->titre }}"
                               class="list-group-item">{{ $sd->titre }}</a>
                        @endforeach
                    </div>
                @endforeach
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection
