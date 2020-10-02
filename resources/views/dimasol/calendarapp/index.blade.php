@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-padding-32 dimasol-container">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    <!-- Header -->
    <!-- <header class="dimasol-container dimasol-blue dimasol-center" style="padding:128px 16px">
    <img class="dimasol-image dimasol-auto" src="{{ url('/img/logo-dimasol.jpg') }}" alt="Logo DIMASOL">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    </header>-->
    <!-- First Grid -->
    <a href="/calendar/create" class="text-right">Nuevo proyecto</a>
    <div class="dimasol-row-padding dimasol-centered dimasol-padding-16 dimasol-container">
        <table class="dimasol-table">
            <thead class="dimasol-blue">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del proyecto</th>
                    <th scope="col">Descripcion del proyecto</th>
                    <th scope="col">Compañia</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody class="dimasol-light-blue">
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$project->projectName}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->company}}</td>
                    <!--<td>{{$project->area}}</td>-->
                        @php
                    $utcDateTime = $project->startDate;
                    $dateTime = $utcDateTime->toDateTime();
                    $showDate = (string)$dateTime->format('d/m/y H:i:s');
                    @endphp
                    <td>{{$showDate}}</td>
                    <td>
                        <a href="/calendar/{{$project->_id}}">Detalles</a>
                        <a href="/calendar/edit/{{$project->_id}}">Editar</a>
                        <a href="/calendar/delete/{{$project->_id}}">Borrar</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="dimasol-col.m6 dimasol-center">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="mx-auto btn-group mr-2" role="group" aria-label="First group">
                    @php
                    $pagactual = request('pag') == 0 ? 1 : request('pag');
                    @endphp
                    <a href="/calendar?pag={{$pagactual-1}}" class="btn btn-secondary {{ $pagactual == 1 ? 'disabled' : ''}}">&lt</a>
                    @for ($i = 1; $i <= ceil($projectCount/600);$i++) <a href="/calendar?pag={{$i}}" class="btn btn-secondary {{ $pagactual == $i ? 'disabled' : ''}}">{{$i}}</a>
                    @endfor
                    <a href="/calendar?pag={{$pagactual+1}}" class="btn btn-secondary {{ $pagactual == ceil($projectCount/600) ? 'disabled' : ''}}">&gt</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
