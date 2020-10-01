<!DOCTYPE html>
@csrf
<html lang="en">
<title>DIMASOL Industrial</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/dimasol-main.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment-with-locales.min.js"></script>
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif
    }

    .dimasol-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
</style>

<body>
    function openTab(user-settings) {
    var i, x;
    x = document.getElementsByClassName("containerTab");
    for (i = 0; i < x.length; i++) { x[i].dimasol-hide ; } document.getElementById(tabName).style.display="dimasol-block" ; } <div class="dimasol-top dimasol-blue dimasol-rigth-align dimasol-hide-small">
        <div class="dimasol-bar dimasol-blue dimasol-card dimasol-left-align dimasol-large dimasol-hide-small">
            <a href="/" class="dimasol-bar-item dimasol-button dimasol-white">Inicio</a>
            <a href="/aboutus" class="dimasol-bar-item dimasol-button dimasol-hover-white">Acerca de </a>
            <a href="/areas" class="dimasol-bar-item dimasol-button dimasol-hover-white">Areas</a>
            <a href="/calendar" class="dimasol-bar-item dimasol-button dimasol-hover-white">Aplicacion</a>
            <a href="/contactus" class="dimasol-bar-item dimasol-button dimasol-hover-white">Contacto</a>
            <div>
                @guest
                <a href="{{ route('register') }}" class="dimasol-bar-item dimasol-button dimasol-hover-white">Registro</a>
                @if (Route::has('register'))
                <a href="{{ route('login') }}" class="dimasol-bar-item dimasol-button dimasol-hover-white">Inicia sesion</a>
                @endif
                @else
                <div class="dimasol-blue dimasol-card dimasol-left-align dimasol-large dimasol-hide-small">
                    <button class="dimasol-blue dimasol-bar-item dimasol-button dimasol-hover-white collapsible" onclick="openTab('user-settings');">{{ Auth::user()->name }}</button>
                    <span onclick="this.parentElement.style.display='none'" class="containerTab">Cerrar Sesion</span>

                </div>
                @endguest
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div class="dimasol-bar-block dimasol-white dimasol-hide dimasol-hide-large dimasol-hide-medium dimasol-large">
            <a href="/aboutus" class="dimasol-bar-item dimasol-button">Acerca de</a>
            <a href="/areas" class="dimasol-bar-item dimasol-button">Areas</a>
            <a href="/calendar" class="dimasol-bar-item dimasol-button">Aplicacion</a>
            <a href="/contactus" class="dimasol-bar-item dimasol-button">Contacto</a>
        </div>
        </div>
        @yield('content')
</body>

</html>
