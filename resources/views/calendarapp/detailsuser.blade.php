@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-padding-32 dimasol-container">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    <div class="dimasol-container dimasol-threequarter">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Nombre del proyecto: </b>{{$proyect->projectName}}</li>
            <li class="list-group-item"><b>Descripcion: </b>{{$proyect->description}}</li>
            <li class="list-group-item"><b>Compañia: </b>{{$proyect->company}}</li>
            <li class="list-group-item"><b>Area: </b>{{$proyect->area}}</li>
        </ul>
    </div>
</div>
@endsection
