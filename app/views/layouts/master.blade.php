<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            ANCAC Case Tracker
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.min.css') }}
        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="navbar-brand" href="#">ANCAC</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav">
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                            @section('nav')
                            @show
                    </div>

                    <div class="nav navbar-nav navbar-right">
                            @if ( Auth::guest() )
                                <li>{{ HTML::link('login', 'Login') }}</li>
                            @else
                                <p class="navbar-text">Signed in as {{{ Auth::id() }}}</p>
                                <li>{{ HTML::link('logout', 'Logout') }}</li>
                            @endif
                    </div> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">

            <!-- Success-Messages -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    <strong>Success </strong>{{{ $message }}}
                </div>
            @endif

            <!-- Content -->
            @yield('content')

        </div>



    </body>
</html>