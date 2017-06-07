@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        @if( Session::has('success'))
            <div class="alert alert-success">
                <strong>Ok !</strong> {{Session::get('success')}}
            </div>
        @endif
        <br>
        <h3>Changer le mot de passe</h3>
    </div>
    <div id="row">
        <div class="col-md-6">
            <form role="form" method="post" action="/doct/password">
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Mot de passe (encore)</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Changer</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
