<!DOCTYPE html>
<html lang="en">
<title>DIMASOL Industrial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/dimasol-main.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="dimasol-top">
        <div class="dimasol-bar dimasol-blue dimasol-card dimasol-left-align dimasol-large">
            <a class="dimasol-bar-item dimasol-button dimasol-hide-medium dimasol-hide-large dimasol-right dimasol-padding-large dimasol-hover-white dimasol-large dimasol-blue"><i class="fa fa-bars">DIMASOL Industrial</i></a>
        </div>
        <div class="dimasol-bar dimasol-blue dimasol-card dimasol-right-align dimasol-large">
            <a class="dimasol-bar-item dimasol-button dimasol-hide-medium dimasol-hide-large dimasol-right dimasol-padding-large dimasol-hover-white dimasol-large dimasol-blue"><i class="fa fa-bars"></i></a>
            <a href="/" class="dimasol-bar-item dimasol-button dimasol-padding-large dimasol-white">Inicio</a>
            <a href="/aboutus" class="dimasol-bar-item dimasol-button dimasol-hide-small dimasol-padding-large dimasol-hover-white">Acerca de </a>
            <a href="/areas" class="dimasol-bar-item dimasol-button dimasol-hide-small dimasol-padding-large dimasol-hover-white">Areas</a>
            <a href="/calendar" class="dimasol-bar-item dimasol-button dimasol-hide-small dimasol-padding-large dimasol-hover-white">Aplicacion</a>
            <a href="/contactus" class="dimasol-bar-item dimasol-button dimasol-hide-small dimasol-padding-large dimasol-hover-white">Contacto</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="dimasol-bar-block dimasol-white dimasol-hide dimasol-hide-large dimasol-hide-medium dimasol-large">
            <a href="/aboutus" class="dimasol-bar-item dimasol-button dimasol-padding-large">Acerca de</a>
            <a href="/areas" class="dimasol-bar-item dimasol-button dimasol-padding-large">Areas</a>
            <a href="/calendar" class="dimasol-bar-item dimasol-button dimasol-padding-large">Aplicacion</a>
            <a href="/contactus" class="dimasol-bar-item dimasol-button dimasol-padding-large">Contacto</a>
        </div>
    </div>
    @yield('content')
</body>

</html>
