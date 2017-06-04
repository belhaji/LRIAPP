@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes Publication</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/resp/pub">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Contenu</label>
                    <input class="form-control" name="contenu">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="desc">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date">
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
                <th>Contenu</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publications as $publication)
                <tr>
                    <td>{{ $publication->titre }}</td>
                    <td>{{ $publication->desc }}</td>
                    <td>{{ $publication->contenu }}</td>
                    <td>{{ $publication->date}}</td>
                    <td class="center">
                        <a href="/resp/pub/delete/{{$publication->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
