@extends('layouts.site')
@section('title', 'Accueil')
@section('content')

    <div class="page-head" style="margin-top: 200px" data-bg-image="images/page-head-4.jpg">
        <div class="container">
            <h2 class="page-title">Contact</h2>
        </div>
    </div>

    <main class="main-content">

        <div class="fullwidth-block">
            <div class="container">
                <div class="widget contact-form">
                    <form action="/message" method="post">
                        <div class="col-md-offset-3 col-md-6">
                            <p><input type="text" required placeholder="Votre nom..." name="nom"></p>
                            <p><input type="email" required placeholder="Email..." name="email"></p>
                        </div>
                        <div class="col-md-offset-3 col-md-6">
                            <p>
                                <textarea name="message"  required placeholder="Message"></textarea>
                            </p>
                            <p class="text-right">
                                <input type="submit" value="Envoyer le message">
                            </p>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="boxed-content">
                            <h2 class="section-title">Address</h2>
                            <address>
                                <p>Company Name INC.</p>
                                <p>423 Avenue Street, Chicago, IL 60610</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="boxed-content">
                            <h2 class="section-title">Telephone</h2>
                            <p><strong>Office:</strong> +1 800 321 431</p>
                            <p><strong>Support:</strong> +1 800 903 412</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="boxed-content">
                            <h2 class="section-title">Email</h2>
                            <p><strong>Office:</strong> <a href="mailto:office@companyname.com">office@companyname.com</a></p>
                            <p><strong>Support:</strong> <a href="mailto:support@companyname.com">support@companyname.com</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main> <!-- .main-content -->
@endsection
