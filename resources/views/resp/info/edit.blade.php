@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <h3>Liste des membres</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/resp/info/editer">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control" name="nom" value="{{$user->infoPerso()->first()->nom}}">
                </div>
                <div class="form-group">
                    <label>Prenom</label>
                    <input value="{{$user->infoPerso()->first()->prenom}}" class="form-control" name="prenom">
                </div>
                <div class="form-group">
                    <label>Tel</label>
                    <input value="{{$user->infoPerso()->first()->tel}}" class="form-control" name="tel">
                </div>
                <div class="form-group">
                    <label>Biographie</label>
                    <textarea class="form-control" rows="8" name="bio">{{$user->infoPerso()->first()->bio }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input value="{{$user->infoPerso()->first()->adresse}}" class="form-control" name="adresse">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value="{{$user->email}}" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="date" value="{{$user->infoPerso()->first()->date_naissance }}" class="form-control"
                           name="date_naissance">
                </div>
                <div class="form-group">
                    <label>Lieux de naissance</label>
                    <input value="{{$user->infoPerso()->first()->lieu_naissance }}" class="form-control"
                           name="lieu_naissance">
                </div>
                <div class="form-group">
                    <label>Situation familliale</label>
                    <input value="{{$user->infoPerso()->first()->situation_familliale}}" class="form-control"
                           name="situation_familliale">
                </div>
                <div class="form-group">
                    <label>Statut</label>
                    <input value="{{$user->infoPerso()->first()->status}}" class="form-control" name="status">
                </div>
                <div class="form-group">
                    <label>Linked in</label>
                    <input value="{{$user->infoPerso()->first()->linkedin}}" class="form-control" name="linkedin">
                </div>
                <div class="form-group">
                    <label>Google plus</label>
                    <input value="{{$user->infoPerso()->first()->gplus}}" class="form-control" name="gplus">
                </div>
                <button type="submit" class="btn btn-primary">Editer</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
