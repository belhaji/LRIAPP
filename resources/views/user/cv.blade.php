<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LRI | Login </title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container">
    <div class="row">
        <p></p>
    </div>
    <div id="row">
        <div class="panel panel-default">
            <div class="panel-heading">Informations Personelles</div>
            <div class="panel-body">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic"
                         src="/img/user.png"
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

</div>


<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/vendor/raphael/raphael.min.js"></script>
<script src="/vendor/morrisjs/morris.min.js"></script>
<script src="/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/dist/js/sb-admin-2.js"></script>

</body>

</html>

