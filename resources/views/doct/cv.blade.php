@extends('layouts.doct')
@section('title', 'Nouveau Evenement')
@section('content')
    <div class="row">
        <p></p>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Informations Personelles</div>
            <div class="panel-body">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic"
                         src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png"
                         class="img-circle img-responsive">
                    <br>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Mes Formations</div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Etablisement</th>
                        <th>Date debut</th>
                        <th>Date fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->formations()->get() as $formation)
                        <tr>
                            <td>{{ $formation->titre }}</td>
                            <td>{{ $formation->etablissement }}</td>
                            <td>{{ $formation->date_debut }}</td>
                            <td>{{ $formation->date_fin }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Mes Experiences</div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Date debut</th>
                        <th>Date fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->experiences()->get() as $experience)
                        <tr>
                            <td>{{ $experience->titre }}</td>
                            <td>{{ $experience->desc }}</td>
                            <td>{{ $experience->date_debut }}</td>
                            <td>{{ $experience->date_fin }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Mes Publications</div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Contenu</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->publications()->get() as $publication)
                        <tr>
                            <td>{{ $publication->titre }}</td>
                            <td>{{ $publication->desc }}</td>
                            <td>{{ $publication->contenu }}</td>
                            <td>{{ $publication->date}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Mes Projets</div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Sous Domaine</th>
                        <th>Date debut</th>
                        <th>Date fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->projects()->get() as $project)
                        <tr>
                            <td>{{ $project->titre }}</td>
                            @if($project->sous_domaine()->first())
                                <td>{{ $project->sous_domaine()->first()->titre }}</td>
                            @else
                                <td></td>
                            @endif
                            <td>{{ $project->date_debut }}</td>
                            <td>{{ $project->date_fin }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
