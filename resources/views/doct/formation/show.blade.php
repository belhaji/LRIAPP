@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes formations</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/doct/formation">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Etablissementtre</label>
                    <input class="form-control" name="etablissement">
                </div>
                <div class="form-group">
                    <label>Date debut</label>
                    <input type="date" class="form-control" name="date_debut">
                </div>
                <div class="form-group">
                    <label>Date fin</label>
                    <input type="date" class="form-control" name="date_fin">
                </div>
                <button type="submit" class="btn btn-primary">ajouter</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Etablisement</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->titre }}</td>
                    <td>{{ $formation->etablisemant }}</td>
                    <td>{{ $formation->date_debut }}</td>
                    <td>{{ $formation->date_fin }}</td>
                    <td class="center">
                        <a href="/doct/formation/delete/{{$formation->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
