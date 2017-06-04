@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="hero">
        <ul class="slides">
            <li data-bg-image="images/slider-1.jpg">
                <div class="container">
                    <div class="slide-content">
                        <h2 class="slide-title">LaboreLabore et dolore magna</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat duis aute irure dolor in reprehenderit.</p>
                        <a href="#" class="button">See details</a>
                    </div>
                </div>
            </li>
            <li data-bg-image="images/slider-2.jpg">
                <div class="container">
                    <div class="slide-content">
                        <h2 class="slide-title">LaboreLabore et dolore magna</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat duis aute irure dolor in reprehenderit.</p>
                        <a href="#" class="button">See details</a>
                    </div>
                </div>
            </li>
            <li data-bg-image="images/slider-3.jpg">
                <div class="container">
                    <div class="slide-content">
                        <h2 class="slide-title">LaboreLabore et dolore magna</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat duis aute irure dolor in reprehenderit.</p>
                        <a href="#" class="button">See details</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <main class="main-content">
        <div class="fullwidth-block">
            <div class="container">
                <h2 class="section-title">Nos Missions</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <img src="images/icon-research-small.png" alt="" class="feature-image">
                            <h2 class="feature-title">Research</h2>
                            <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero
                                tempore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <img src="images/icon-medicine-small.png" alt="" class="feature-image">
                            <h2 class="feature-title">Medicice</h2>
                            <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero
                                tempore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <img src="images/icon-genetics-small.png" alt="" class="feature-image">
                            <h2 class="feature-title">Genetics</h2>
                            <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero
                                tempore.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <img src="images/icon-energy-small.png" alt="" class="feature-image">
                            <h2 class="feature-title">Energy</h2>
                            <p>Laborum et dolorum fuga harum quidem rerum facilis et expedita distinctio nam libero
                                tempore.</p>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .fullwidth-block -->

        <div class="fullwidth-block" data-bg-color="#edf2f4">
            <div class="container">
                <h2 class="section-title">Les derniers evenements </h2>
                <div class="row">
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
                </div> <!-- .row -->
                <br>
                <br>
                <a href="/events" class="button">Voir tout</a>
            </div> <!-- .container -->
        </div> <!-- .fullwidth-block -->

        <div class="fullwidth-block">
            <div class="container">
                <h2 class="section-title">Les derniers Actualites </h2>
                <div class="row">
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
                </div> <!-- .row -->
                <br>
                <br>
                <a href="/posts" class="button">Voir tout</a>
            </div> <!-- .container -->
        </div>

    </main> <!-- .main-content -->
@endsection
