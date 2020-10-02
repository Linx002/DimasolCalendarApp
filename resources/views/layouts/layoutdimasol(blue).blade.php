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
    <div class="dimasol-top dimasol-blue dimasol-rigth-align dimasol-hide-small">
        <div class="dimasol-container dimasol-bar dimasol-blue dimasol-card dimasol-left-align dimasol-large dimasol-hide-small">
            <a href="/" class="dimasol-bar-item dimasol-button dimasol-white">Inicio</a>
            <a href="/aboutus" class="dimasol-bar-item dimasol-button dimasol-hover-white">Acerca de </a>
            <a href="/areas" class="dimasol-bar-item dimasol-button dimasol-hover-white">Areas</a>
            <a href="/calendar" class="dimasol-bar-item dimasol-button dimasol-hover-white">Aplicacion</a>
            <a href="/contactus" class="dimasol-bar-item dimasol-button dimasol-hover-white">Contacto</a>
            <div class="dimasol-dropdown-hover dimasol-light-blue">
                @if (Route::has('login'))
                @auth
                <button class="dimasol-hover-white dimasol-button">{{ Auth::user()->name }}</button>
                    <div class="dimasol-bar-block dimasol-dropdown-content dimasol-border">
                        <a href="/" class="dimasol-button dimasol-bar-item">Ir a página principal</a>
                        <a href="{{ route('logout') }}" class="dimasol-button dimasol-bar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="dimasol-bar-item dimasol-button">Inicia sesion</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="dimasol-bar-item dimasol-button">Registro</a>
                        @endif
                        @endauth
                        @endif
                    </div>
            </div>
        </div>
     </div>
        @yield('content')
</body>

</html>
