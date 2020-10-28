@extends('layouts.layoutdimasol(blue)')
@section('content')
<h1>{{ $album->albumName }}</h1>

<div id="photos" class="dimasol-padding dimasol-container dimasol-light-grey">
    @if (count($album->photos) > 0 )
    @php
        $colCount = count($album->photos);
        $i = 1;
    @endphp
    <div class="dimasol-row dimasol-center dimasol-centered">
        @foreach ($album->photos as $photo)
        @if ($i == $colCount)
        <div class="dimasol-quarter end">
            <h4> {{ $photo->photoTitle }}</h4>
                <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" width="200px" alt="{{ $photo->photoTitle }}" onclick="document.getElementById('locacion').style.display='block'" class="dimasol-hover-opacity">
                <span onclick="this.parentElement.style.display='none'" class="dimasol-button dimasol-large dimasol-display-topright">&times;<a href=""></span>
                <div id="locacion" class="dimasol-modal dimasol-animate-zoom" onclick="this.style.display='none'">
                    <img class="dimasol-modal-content" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}">
                </div>

        @else
        <div class="dimasol-quarter">
            <h4> {{ $photo->photoTitle }}</h4>
                <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" height="200px" alt="{{ $photo->photoTitle }}" onclick="document.getElementById('locacion').style.display='block'" class="dimasol-hover-opacity">
            <br>
        @endif
        @if($i % 3 == 0)
        </div></div><div class="dimasol-row dimasol-center dimasol-centered">
            @else
            </div>
        @endif
            @php
                $i++;
            @endphp
        @endforeach
    </div>
</div>
@else
    <p> No hay fotos que mostrar </p>
    @endif
@if (Route::has('login'))
@auth
<a href="/album/admin" class="btn button-radius btn-link">Regresar a administrar</a>
@else
    @endif
    <a class="btn button-radius btn-link" href="/areas">Regresar</a>
    @endauth
@endsection
