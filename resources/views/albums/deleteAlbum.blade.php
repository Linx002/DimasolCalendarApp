@extends('layouts.layoutdimasol(blue)')
@section('content')
@if (Route::has('login'))
@auth

<h1>Borrar álbum -> {{ $album->albumName }}</h1>

<a href="/album/admin" class="btn button-radius btn-link">Regresar a administrar</a>
@else
<h1>
        Necesita iniciar sesión para ver este contenido.
    </h1>
    @endif
    @endauth
@endsection
