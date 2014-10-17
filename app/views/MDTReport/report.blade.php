<!DOCTYPE html>

<html lang="en">
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
            .note {
                padding-left: 12pt;
            }
        @show
        </style>
    </head>

    <body>
        
    <!-- Content -->
    @yield('content')


    </body>
</html>
