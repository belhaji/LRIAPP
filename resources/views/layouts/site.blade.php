<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Science Labs</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

</head>


<body>

<div class="site-content">
    <header class="site-header collapsed-nav" data-bg-image="">
        <div class="container-fluid">
            <div class="header-bar">
                <a href="/" class="branding">
                    <img width="100px" src="/img/logo.png" alt="" class="logo">
                </a>

                <nav class="main-navigation">
                    <button class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu" style="padding-right: 10px">
                        <li class="home menu-item current-menu-item">
                            <a href="/">
                                <img src="images/home-icon.png" alt="Home">
                            </a>
                        </li>
                        <li class="menu-item"><a href="/presentation">Présentation</a></li>
                        <li class="menu-item"><a href="/directeurs">Directeurs de thèses</a></li>
                        <li class="menu-item"><a href="/membres">Membres</a></li>
                        <li class="menu-item"><a href="/themes">thèmes de recherche</a></li>
                        <li class="menu-item"><a href="/contact">Contact</a></li>
                        <li class="menu-item"><a href="/recherche">Recherche</a></li>
                        <li class="dropdown menu-item">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="/login"><i class="fa fa-sign-in fa-fw"></i> login</a>
                                </li>
                                <li>
                                    <a href="/inscription"><i class="fa fa-sign-out fa-fw"></i> S'inscrire</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <br>
                            <form role="form" class="form-inline pull-right" action="/recherche" method="get">
                                <input type="text" required class="form-control" name="q">
                                <input type="submit" value="go"/>
                            </form>
                        </li>
                    </ul>
                </nav>

                <div class="mobile-navigation"></div>
            </div>
        </div>
    </header>

    @yield('content')


    <footer class="site-footer" style="background-color: #1b6d85; color: #FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <h3 class="widget-title">Adresse</h3>
                        <strong>Labo LRI</strong>
                        <address>592 Avenue Street, Los Angeles, CA 90012</address>
                        <a href="tel:+1 800 931 812">+1 800 931 812</a> <br>
                        <a href="mailto:office@companyname.com">office@companyname.com</a>
                    </div>
                </div>

                <div class="widget contact-form">
                    <h3 class="widget-title">Nos Contactez</h3>
                    <form action="/message" method="post">
                        <div class="col-md-6">
                            <p><input style="color: #000;" required type="text" placeholder="Votre nom..." name="nom"></p>
                            <p><input style="color: #000;" required type="email" placeholder="Email..." name="email"></p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <textarea style="color: #000;" required name="message" placeholder="Message"></textarea>
                            </p>
                            <p class="text-right">
                                <input type="submit" value="Envoyer le message">
                            </p>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div> <!-- .row -->

            <p class="colophon col-md-8 col-md-offset-4"> &copy; 2014 Labo LRI. rights reserved</p>
        </div> <!-- .container -->
    </footer>
</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>