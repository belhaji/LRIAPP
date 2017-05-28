@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes Projets</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/doct/projet">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Date debut</label>
                    <input type="date" class="form-control" name="date_debut">
                </div>
                <div class="form-group">
                    <label>Date fin</label>
                    <input type="date" class="form-control" name="date_fin">
                </div>
                <div class="form-group">
                    <label>Domain</label>
                    <select name="domaine">
                        @foreach($domaines as $domain)
                            <option value="{{$domain->id}}">{{$domain->titre}}</option>
                        @endforeach
                        <option value="0">Autre</option>
                    </select>
                    <input type="text" class="form-control" name="domaine_text">
                </div>

                <div class="form-group">
                    <label>Sous Domain</label>
                    <select name="sous_domain">
                        @foreach($sdomaines as $sdomain)
                            <option value="{{$sdomain->id}}">{{$sdomain->titre}}</option>
                        @endforeach
                        <option value="0">Autre</option>
                    </select>
                    <input type="text" class="form-control" name="sdomaine">
                </div>
                <button type="submit" class="btn btn-primary">ajouter</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="row">
        <br>
        <br>
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Sous Domaine</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projets as $project)
                <tr>
                    <td>{{ $project->titre }}</td>
                    @if($project->sous_domaine()->first())
                        <td>{{ $project->sous_domaine()->first()->titre }}</td>
                    @else
                        <td></td>
                    @endif
                    <td>{{ $project->date_debut }}</td>
                    <td>{{ $project->date_fin }}</td>
                    <td class="center">
                        <a href="/doct/projet/delete/{{$project->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
