@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Nouveau Post</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/resp/post">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea class="form-control" rows="8" name="contenu"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
