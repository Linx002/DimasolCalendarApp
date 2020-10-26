@extends('layouts.layoutdimasol(blue)')
@section('content')
@if (Route::has('login'))
@auth
<div class="dimasol-row-padding dimasol-half dimasol-container">
    <h1 class="dimasol-margin">Borrar proyecto</h1>
    <form action="/calendar/delete" method="POST">
        @csrf
        @method('DELETE')
        @if (session('mssg') !== null)
            <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
                {{ session('mssg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <input type="hidden" name="projectid" id="projectid" value="{{$project ->_id}}">
        <p class="msg">{{session('msg')}}</p>
            <ul class="list-group list-group-flush">
                <label for="name">Nombre del proyecto: </label>
                <input class="form-control" type="text" name="projectName" id="projectName" value="{{$project->projectName}}" disabled>

                <label for="description">Descripcion: </label>
                <input name="description" id="description" class="form-control" value="{{$project->description}}" disabled></textarea>

                <label for="company">Compañia: </label>
                <input class="form-control" type="text" name="company" id="company" value="{{$project->company}}" disabled>

                <label for="area">Área: </label>
                <input class="form-control" type="text" name="area" id="area" value="{{$project->area}}" disabled>

                <label for="requisited">Requisitado por: </label>
                <input class="form-control" type="text" name="requisitedBy" id="requisitedBy" value="{{$project->requisitedBy}}" disabled>

                <label for="startDate">Fecha de inicio: </label>
                 @php
                    $utcDateTime = $project->startDate;
                    $dateTime = $utcDateTime->toDateTime();
                    $showStartDate = (string)$dateTime->format('d/m/y H:i:s');
                @endphp
                <input class="form-control" type="datetime" name="startDate" id="startDate" value="{{$showStartDate}}" disabled>

                <label for="endDate">Fecha de finalizacion: </label>
                 @php
                    $utcEndDateTime = $project->endDate;
                    $dateTimeTemp = $utcEndDateTime->toDateTime();
                    $showEndDate = (string)$dateTimeTemp->format('d/m/y H:i:s');
                @endphp
                <input class="form-control" type="datetime" name="endDate" id="endDate" value="{{$showEndDate}}" disabled>

                <label for="consumables">Requerirá consumibles?: </label>
                @php
                $boolC = $project->consumables;
                $dateTimeTemp = $utcEndDateTime->toDateTime();
                $showEndDate = (string)$dateTimeTemp->format('d/m/y H:i:s');
                @endphp

                <input class="dimasol-check" type="checkbox" value="{{$project->consumables}}" name="name" id="name" disabled>

            </ul>
            <br>
    <button class="btn button-radius btn-link"><a href="/calendar/">Regreso al catálogo</a> </button>
    <button type="submit" class="btn btn-danger button-radius">Borrar</button>
    </form>
</div>
@else
                <h1>
                    Necesita iniciar sesión para ver este contenido.
                </h1>
                    @endauth
                    @endif
@endsection
