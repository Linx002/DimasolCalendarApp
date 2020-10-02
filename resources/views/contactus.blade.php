@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-padding-64 dimasol-container">
    <h1>Contacto</h1>
    <p>Nos puede encontrar en la siguiente dirección:</p><br>
    <p> Ubicación: Calle Cristóbal de Olid #69 Col. Inf. Conquistadores, Cd. Rio Bravo, Tamaulipas. C.P. 88993</p>
    <div class="dimasol-center dimasol-row-padding dimasol-light-grey dimasol-padding-64 dimasol-container">
        <img style="width:20%" src="{{ url('/img/dimasol-location.jpg') }}" onclick="document.getElementById('locacion').style.display='block'" class="dimasol-hover-opacity">

        <div id="locacion" class="dimasol-modal dimasol-animate-zoom" onclick="this.style.display='none'">
            <img class="dimasol-modal-content" src="{{ url('/img/dimasol-location.jpg') }}">
        </div>
    </div>
    <div class="dimasol-row-padding dimasol-padding-64 dimasol-container">
        <div class="dimasol-container dimasol-third" id="contact">
            <h3>Formulario de contacto</h3>
            <p>Llamenos o envíenos un correo electronico para poder atender sus necesidades.</p>
            <!-- <i class="fa fa-map-marker dimasol-text-blue" style="width:30px"></i>Calle Cristóbal de Olid #69 Col. Inf. Conquistadores, Cd. Rio Bravo, Tamaulipas. C.P. 88993<br> -->
            <i class="fa fa-phone dimasol-text-blue" style="width:30px"></i> Cels: (899) 170 2597 / (899)981 5421<br>
            <i class="fa fa-phone-square dimasol-text-blue" style="width:30px"></i> Tel. Oficina: 933 - 81 - 10<br>
            <i class="fa fa-envelope dimasol-text-blue" style="width:30px"> </i> Correo: <a href="mailto:dimasolrb.2016@hotmail.com">dimasolrb.2016@hotmail.com</a><br>
            <form action="mailto:linx002xbox@gmail.com" method="GET"><br>
                <input class="dimasol-input dimasol-padding-16 dimasol-border" type="text" placeholder="Nombre" required name="subject"><br>
                <input class="dimasol-input dimasol-padding-16 dimasol-border" type="text" placeholder="Correo Electrónico" required name="cc"><br>
                <textarea class="dimasol-input dimasol-padding-16 dimasol-border" col="20" rows="10" placeholder="Escriba aquí su mensaje" required name="body"></textarea><br>
                <button class="dimasol-button dimasol-black dimasol-padding-large" value="send" type="submit">Enviar mensaje</button><br>
            </form>
        </div>
    </div>
</div>
@endsection
