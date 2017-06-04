@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Nouveau Evenement</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/resp/evenement">
                <div class="form-group">
                    <label>Titre d'evenement</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="8" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Lieux</label>
                    <input class="form-control" name="lieux">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input class="form-control" type="date" name="date">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
