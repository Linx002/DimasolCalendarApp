@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-half dimasol-container">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    <form action="/calendar/delete" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="projectid" id="projectid" value="{{$project ->_id}}">
        <p class="msg">{{session('msg')}}</p>
            <ul class="list-group list-group-flush">
                <label for="name">Nombre del proyecto: </label>
                <input class="form-control" type="text" name="projectName" id="projectName" value="{{$project->projectName}}" disabled>

                <label for="description">Descripcion: </label>
                <textarea name="description" id="description" cols="25" rows="10" class="form-control" value="{{$project->description}}" disabled></textarea>

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
                <input class="form-control" type="text" name="startDate" id="startDate" value="{{$showStartDate}}" disabled>

                <label for="endDate">Fecha de finalizacion: </label>
                 @php
                    $utcEndDateTime = $project->endDate;
                    $dateTimeTemp = $utcEndDateTime->toDateTime();
                    $showEndDate = (string)$dateTimeTemp->format('d/m/y H:i:s');
                @endphp
                <input class="form-control" type="text" name="endDate" id="endDate" value="{{$showEndDate}}" disabled>

                <label for="consumables">Requerirá consumibles?: </label>
                <input class="dimasol-check" type="checkbox" value="{{$project->consumables}}" name="name" id="name" disabled>

            </ul>
            <br>
    <button type="submit" class="btn btn-danger button-radius">Borrar</button>
    </form>
</div>
@endsection
