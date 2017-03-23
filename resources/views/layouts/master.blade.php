<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!--Font Awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!--CSS-->
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/mdb.min.css') !!}
        <!--SCRIPTS-->
        {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
        {!! Html::script('assets/js/tether.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/mdb.min.js') !!}
    </head>
    <body class="img-gradient">
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-dark blue navbar-fixed-top gsb-navbar" style="position: fixed;">

                <!--Collapse button-->
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="container">

                    <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="collapseEx">
                        <!--Navbar Brand-->
                        <a class="navbar-brand" href="{{ url('/') }}">GSB Commercial</a>
                        <!--Links-->
                        @if (Session::get('id') == 0)
                        <ul class="nav navbar-nav">
                        </ul>
                        <ul class="nav navbar-nav" style="float: right;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('connexion') }}">Connexion</a>
                            </li>
                        </ul>
                        @endif
                        @if (Session::get('id') > 0)
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('lister') }}">Lister</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ajouter') }}">Ajouter</a>
                            </li> 
                        </ul>
                        <ul class="nav navbar-nav" style="float: right;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('deconnexion') }}">Déconnexion</a>
                            </li>
                        </ul>
                        @endif
                    </div>
                    <!--/.Collapse content-->
                </div>

            </nav>
            <!--/.Navbar-->
        </header>
        <body style="padding-top:50px;">
            <div class="row">
                <div class="container" style="padding-top:50px;">
        <!--yield-->
        @yield('content')
        <!--/.yield-->
                </div>
            </div>
        </body>
    </body>
</html>
