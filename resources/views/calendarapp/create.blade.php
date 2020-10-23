@extends('layouts.layoutdimasol(blue)')
@section('content')
<div class="dimasol-row-padding dimasol-half dimasol-container">
    <h1 class="dimasol-margin dimasol-jumbo">DIMASOL Industrial</h1>
    <form action="/calendar/create" method="POST">
        @csrf
        <p class="msg">{{session('msg')}}</p>
            <ul class="list-group list-group-flush">
                <label for="name">Nombre del proyecto: </label>
                <input class="form-control" type="text" name="projectName" id="projectName" required autofocus>

                <label for="description">Descripcion: </label>
                <textarea name="description" id="description" cols="25" rows="10" class="form-control"></textarea>

                <label for="company">Compañia: </label>
                <input class="form-control" type="text" name="company" id="company" required>

                <label for="area">Área: </label>
                <input class="form-control" type="text" name="area" id="area" required>

                <label for="requisited">Requisitado por: </label>
                <input class="form-control" type="text" name="requisitedBy" id="requisitedBy" required>

                <label for="startDate">Fecha de inicio: </label>
                <input class="form-control" type="date" min="2020-09-01" name="startDate" id="startDate" required>

                <label for="endDate">Fecha de finalizacion: </label>
                <input class="form-control" type="date" min="2020-09-01" name="endDate" id="endDate" required>

                <label for="consumables">Requerirá consumibles?: </label>
                <input class="dimasol-check" type="checkbox" checked="checked" name="name" id="name"/>
                @php
                $startDateVar = date("Y-m-d\TH:i",$_POST['startDate']);
                $endDateVar = date(DATE_ATOM,$_POST['endDate']);
                @endphp

                <input type="hidden" id="startDateUTC" value="{{$startDateVar}}">

                <input type="hidden" id="endDateUTC" value="{{$endDateVar}}">

            </ul>
    <button type="submit" class="btn btn-success">Create</button>
    <button type="reset" class="btn btn-warning">Reset</button>
    </form>
</div>
@endsection
