@extends('layouts.admin')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        @if( Session::has('success'))
            <div class="alert alert-success">
                <strong>Ok !</strong> {{Session::get('success')}}
            </div>
        @endif
        <br>
        <h3>Changer la description du site</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/admin/infosite">
                <div class="form-group">
                    <label>Titre</label>
                    <input class="form-control" name="titre" value="{{$info->titre}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="8" name="description">{{$info->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enregister</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
