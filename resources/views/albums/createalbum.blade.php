@extends('layouts.layoutdimasol(blue)')
@section('content')
@if (Route::has('login'))
@auth
<meta name="csrf-token" value="{{ csrf_token() }}" />
<h1>Crear álbum</h1>
<div class="dimasol-col dimasol-col-padding dimasol-container dimasol-padding-16">
    <div class="dimasol-quarter dimasol-col dimasol-container"></div>
    <div class="dimasol-container dimasol-padding-32 dimasol-blue-gray dimasol-col dimasol-half">
        <div class="dimasol-container dimasol-col">
            <form action="/album/store" method="POST">
                @csrf
                <label for="albumName">Nombre del álbum</label>
                <input class="form-control" type="text" name="albumName" id="albumtName" required autofocus/>
                <br/>
                <label for="albumDescription">Descripción</label>
                <input class="form-control" type="textarea" name="albumDescription" id="albumtDescription" required/>
                <br/>
                <label for="coverPhoto">Foto de portada</label>
                <input class="form-control" type="file" name="coverPhoto" id="coverPhoto" required/>
                <br/>
                <button type="submit" class="btn btn-success">Create</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
</div>
@else
                <h1>
                    Necesita iniciar sesión para ver este contenido.
                </h1>
                    @endauth
                    @endif
@endsection
