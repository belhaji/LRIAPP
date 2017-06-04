@extends('layouts.resp')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Equipe "{{$equipe->nom}}"</h3>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <h3>Members</h3>
            <a href="/resp/equipe/{{$equipe->id}}/add" class="btn btn-primary">Ajouter un membre</a>
            <table width="50%" class="table table-striped table-bordered table-hover"
                   id="dataTables-example">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($equipe->members()->get() as $member)
                    <tr>
                        <td>{{ $member->infoPerso()->first()->nom }}</td>
                        <td>{{ $member->email }}</td>
                        <td class="">
                            <a href="/resp/equipe/{{$equipe->id}}/delete/{{ $member->id }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
