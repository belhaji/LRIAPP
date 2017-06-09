@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Les Slides</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/admin/slides">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre">
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
    <div class="row">
        <br>
        <br>
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->titre }}</td>
                    <td>{{ $slide->description }}</td>
                    <td class="center">
                        <a href="/admin/slides/delete/{{$slide->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
