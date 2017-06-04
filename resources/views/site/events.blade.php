@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Tout les evenements</h2>
        </div>
    </div>
    <main class="main-content">
        <div class="fullwidth-block" data-bg-color="#edf2f4">
            <div class="container">
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

            </div> <!-- .container -->
        </div> <!-- .fullwidth-block -->
    </main>
@endsection
