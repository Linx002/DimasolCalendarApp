@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-padding-32 dimasol-container">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    <div class="dimasol-container dimasol-half">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5>Nombre del projecto: </h5>{{$project->projectName}}</li>
            <li class="list-group-item"><h5>Descripcion: </h5>{{$project->description}}</li>
            <li class="list-group-item"><h5>Compañia: </h5>{{$project->company}}</li>
            <li class="list-group-item"><h5>Area: </h5>{{$project->area}}</li>
            <li class="list-group-item"><h5>Requisitado por: </h5>{{$project->requisitedBy}}</li>
            <li class="list-group-item"><h5>Area: </h5>{{$project->area}}</li>
            <li class="list-group-item"><h5>Proyecto creado por: </h5>{{$project->createdBy}}</li>
        </ul><br>
        <a href="/calendar/">Regreso al catálogo</a> |
        <a href="/calendar/edit/{{$project->_id}}">Edit</a> |
        <a href="/calendar/delete/{{$project->_id}}">Delete</a>
    </div>
</div>
@endsection