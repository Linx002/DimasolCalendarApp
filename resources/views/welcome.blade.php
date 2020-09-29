@extends('layouts.layoutdimasol(blue)')
@section('content')
<!-- Header -->
<header class="dimasol-container dimasol-blue dimasol-center" style="padding:128px 16px">
    <img class="dimasol-image" src="{{ url('/img/logo-dimasol.jpg') }}" alt="Logo DIMASOL">
    <!-- <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1> -->
</header>
<!-- First Grid -->
<div class="dimasol-row-padding dimasol-padding-64 dimasol-container">
    <div class="dimasol-content">
        <div class="dimasol-threequarter">
            <h1>Descripcion de la Empresa</h1>
            <p>Es una empresa dedicada al mantenimiento correctivo e integración de nuevos proyectos así mismo contamos con experiencia en el ramo de soldadura, soporte técnico en sistemas mecánicos, neumáticos e hidráulicos y fabricación de: </p>
            <li>-Engranes fabricados en acetal, bronce, aluminio, acero inoxidable y en acero templado.</li>
            <li>-Rectificado de rodillos de acero, cubiertos de neopreno, caucho, etc.</li>
            <li>-Fabricación y maquinado de pistas de balero, retenes y sellos mecánicos.</li>
            <li>-Fabricación de roscas, interiores y exteriores, milimétricas y estándar, acme y cuadradas entre otras.</li>
            <li>-Fabricación de cuñeros interiores y exteriores.</li>
            <li>-Fabricación de estriados interiores y exteriores</li>
            <li>-Revestido de pistas de sellos mecánicos, pistas de valeros, pistas de retenes y roscas dañadas con acero inoxidable, soldadura 7018, etc .</li>
            <li>-Fabricación de bujes de bronce, nylamid, aceros templados, etc.</li>
            <li>-Fabricación y diseño de fixturas conforme a las necesidades requeridas.</li>
            <li>-Fabricación y diseño de estaciones de trabajo fabricadas en perfil tipo Bosch o PTR.</li>
            <li>-Fabricación de repisas, rack, carros de traslado y guardas de seguridad fabricadas en PTR, perfil tipo Bosch y policarbonato (lexan).</li>
            </li>
        </div>
    </div>
</div>
<!-- Second Grid -->
<div class="dimasol-row-padding dimasol-light-grey dimasol-padding-64 dimasol-container">
    <div class="dimasol-container" id="contact">
        <h2>Contacto</h2>
        <i class="fa fa-map-marker dimasol-text-blue" style="width:30px"></i>Calle Cristóbal de Olid #69 Col. Inf. Conquistadores, Cd. Rio Bravo, Tamaulipas. C.P. 88993<br>
        <i class="fa fa-phone dimasol-text-blue" style="width:30px"></i> Cels: (899) 170 2597 / (899)981 5421<br>
        <i class="fa fa-phone-square dimasol-text-blue" style="width:30px"></i> Tel. Oficina: 933 - 81 - 10<br>
        <i class="fa fa-envelope dimasol-text-blue" style="width:30px"> </i> Correo: <a href="mailto:dimasolrb.2016@hotmail.com">dimasolrb.2016@hotmail.com</a><br>
        <form action="mailto:linx002xbox@gmail.com" method="GET">
            <p><input class="dimasol-input dimasol-padding-16 dimasol-border" type="text" placeholder="Name" required name="subject"></p>
            <p><input class="dimasol-input dimasol-padding-16 dimasol-border" type="text" placeholder="Email" required name="cc"></p>
            <p><input class="dimasol-input dimasol-padding-16 dimasol-border" type="text" placeholder="Message" required name="body"></p>
            <p><button class="dimasol-button dimasol-black dimasol-padding-large" value="send" type="submit">Enviar mensaje</button></p>
        </form>
    </div>
</div>

    <!-- <div class="dimasol-row-padding dimasol-light-grey dimasol-padding-64 dimasol-container">
        <div class="dimasol-content">
            <div class="dimasol-third dimasol-center">
                <i class="fa fa-coffee dimasol-padding-64 dimasol-text-red dimasol-margin-right"></i>
            </div>
            <div class="dimasol-twothird">
                <h1>Lorem Ipsum</h1>
                <h5 class="dimasol-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                <p class="dimasol-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div> -->
    @endsection
