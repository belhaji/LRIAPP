@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes Experiences</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/doct/experience">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="desc">
                    </textarea>
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
    <div class="row">
        <br>
        <br>
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($experiences as $experience)
                <tr>
                    <td>{{ $experience->titre }}</td>
                    <td>{{ $experience->desc }}</td>
                    <td>{{ $experience->date_debut }}</td>
                    <td>{{ $experience->date_fin }}</td>
                    <td class="center">
                        <a href="/doct/experience/delete/{{$experience->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
