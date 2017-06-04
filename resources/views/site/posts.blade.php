@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Tout les actualites</h2>
        </div>
    </div>
    <main class="main-content">
        <div class="fullwidth-block" data-bg-color="#edf2f4">
            <div class="container">
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

            </div> <!-- .container -->
        </div> <!-- .fullwidth-block -->
    </main>
@endsection
