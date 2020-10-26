@extends('layouts.layoutdimasol(blue)')
@section('content')
@if (Route::has('login'))
@auth
<div class="dimasol-row-padding dimasol-half dimasol-container">
    <h1 class="dimasol-margin">Editar proyecto</h1>
    <form action="/calendar/edit" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="projectid" id="projectid" value="{{$project ->_id}}">
        <p class="msg">{{session('msg')}}</p>
            <ul class="list-group list-group-flush">
                <label for="name">Nombre del proyecto: </label>
                <input class="form-control" type="text" name="projectName" id="projectName" value="{{$project->projectName}}">

                <label for="description">Descripcion: </label>
                <input name="description" id="description" class="form-control" value="{{$project->description}}"></textarea>

                <label for="company">Compañia: </label>
                <input class="form-control" type="text" name="company" id="company" value="{{$project->company}}">

                <label for="area">Área: </label>
                <input class="form-control" type="text" name="area" id="area" value="{{$project->area}}">

                <label for="requisited">Requisitado por: </label>
                <input class="form-control" type="text" name="requisitedBy" id="requisitedBy" value="{{$project->requisitedBy}}">

                <label for="startDate">Fecha de inicio: </label>
                 @php
                    $utcDateTime = $project->startDate;
                    $dateTime = $utcDateTime->toDateTime();
                    $showStartDate = (string)$dateTime->format('d/m/y H:i:s');
                @endphp
                <input class="form-control" type="datetime-local    " name="startDate" id="startDate" value="{{$showStartDate}}">

                <label for="endDate">Fecha de finalizacion: </label>
                 @php
                    $utcEndDateTime = $project->endDate;
                    $dateTimeTemp = $utcEndDateTime->toDateTime();
                    $showEndDate = (string)$dateTimeTemp->format('d/m/y H:i:s');
                @endphp
                <input class="form-control" type="datetime-local" name="endDate" id="endDate" value="{{$showEndDate}}">

                <label for="consumables">Requerirá consumibles?: </label>
                @php
                $boolC = $project->consumables;
                $dateTimeTemp = $utcEndDateTime->toDateTime();
                $showEndDate = (string)$dateTimeTemp->format('d/m/y H:i:s');
                @endphp

                <input class="dimasol-check" type="checkbox" value="{{$project->consumables}}" name="name" id="name">

            </ul>
            <br>
    <button class="btn button-radius btn-link"><a href="/calendar/">Regreso al catálogo</a> </button>
    <button type="submit" class="btn btn-warning button-radius">Editar</button>
    </form>
</div>
@else
                <h1>
                    Necesita iniciar sesión para ver este contenido.
                </h1>
                    @endauth
                    @endif
@endsection
