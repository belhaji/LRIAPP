@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div id="row">
        <br>
        <h3>Mes informations personelles</h3>
    </div>
    <div id="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic"
                                     src="/img/user.png"
                                     class="img-circle img-responsive">
                                <br>
                                <a href="/doct/info/editer" class="btn btn-primary ">Editer</a>
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Nom:</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->nom  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Prenom:</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->prenom  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tel:</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->tel  }}
                                        </td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Bio:</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->bio  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Adresse</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->adresse  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:{{ $user->email  }}">{{ $user->email }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Date de naissance</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->date_naissance  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lieux de naissance</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->lieu_naissance  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Situation familliale</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->situation_familliale  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Statut</td>
                                        <td>
                                            {{ $user->infoPerso()->first()->status  }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-linkedin-square"></i>
                                            Linked in
                                        </td>
                                        <td>
                                            <a href="{{ $user->infoPerso()->first()->linkedin  }}">
                                                {{ $user->infoPerso()->first()->linkedin  }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-google-plus"></i>
                                            Google plus
                                        </td>
                                        <td>
                                            <a href="{{ $user->infoPerso()->first()->gplus  }}">
                                                {{ $user->infoPerso()->first()->gplus  }}
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
