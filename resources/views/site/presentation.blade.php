@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Presentation du labo</h2>
        </div>
    </div>
    <div class="row fullwidth-block">
        <main class="main-content col-md-8 col-md-offset-2">
            <div class="col-md-12   ">
                <ul class="testimonial-list">
                    <li>
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis
                            </p>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    <div class="fullwidth-block" data-bg-color="#edf2f4">
        <div class="container">
            <h2 class="section-title">Nos equipes </h2>
            <div class="row">
                @foreach($equipes as $equipe)
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/users.png" width="80px" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $equipe->nom }}</h3>
                                <p>{{ $equipe->description }}</p>
                                <small>responsable :
                                    {{ $equipe->responsable()->first()->nom }}
                                    {{ $equipe->responsable()->first()->prenom }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .fullwidth-block -->
@endsection