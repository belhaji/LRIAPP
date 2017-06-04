@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes Equipes</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/resp/equipe">
                <div class="form-group">
                    <label>Nom d'equipe</label>
                    <input class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control" name="description">
                </div>
                <button type="submit" class="btn btn-primary">ajouter</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <table width="50%" class="table table-striped table-bordered table-hover"
                   id="dataTables-example">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($equipes as $equipe)
                    <tr>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->description }}</td>
                        <td class="">
                            <a href="/resp/equipe/{{$equipe->id}}" class="btn btn-primary">Voir</a>
                            <a href="/resp/equipe/delete/{{$equipe->id}}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
