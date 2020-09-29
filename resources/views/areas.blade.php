@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-padding-64 dimasol-container">
    <h1>Areas de trabajo</h1>
    <p>Estas son lás diferentes áreas de trabajo con las que contamos para su servicio.
        <br>
        La industria DIMASOL cuenta con los equipos requeridos para cierta áreas del establecimiento con el fin de mantener seguro a nuestro personal en las jornadas de trabajo dependiendo del área en que se encuentren.
        </b>
    </p>
    <div class="dimasol-content dimasol-section" style="max-width:500px">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq1.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq2.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq3.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq4.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq5.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq6.jpeg') }}" style="width:100%">
        <img class="fotos-area-maq" src="{{ url('/img/areas/maquinado/Maq7.jpeg') }}" style="width:100%">
    </div>
    <div class="dimasol-center">
        <div class="dimasol-section">
            <button class="dimasol-button" onclick="plusDivs(-1)">&#10094; Prev</button>
            <button class="dimasol-button" onclick="plusDivs(1)">Next &#10095;</button>
        </div>
        <button class="dimasol-button demo" onclick="currentDiv(1)">1</button>
        <button class="dimasol-button demo" onclick="currentDiv(2)">2</button>
        <button class="dimasol-button demo" onclick="currentDiv(3)">3</button>
        <button class="dimasol-button demo" onclick="currentDiv(4)">4</button>
        <button class="dimasol-button demo" onclick="currentDiv(5)">5</button>
        <button class="dimasol-button demo" onclick="currentDiv(6)">6</button>
        <button class="dimasol-button demo" onclick="currentDiv(7)">7</button>

    </div>
    <!-- Slideshow con botones -->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("fotos-area-maq");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-red";
        }
    </script>

    <!-- Slideshow automatico (2segundos) -->
    <!--<script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("fotos-area-maq");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script> -->
</div>
@endsection
