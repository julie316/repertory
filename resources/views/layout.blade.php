<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    </head>
    <body>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ route('accueil')}}" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link">Contacts</a>
                </li>
            </ul>
            @yield('content')
        </div>
    </body>
</html>
