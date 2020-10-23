@extends('layouts.layoutdimasol(blue)')

@section('content')
<div class="dimasol-col">
    <div class="dimasol-col.m16 dimasol-blue dimasol-quarter">
        <div class="dimasol-card">
            <h3>@if (session('status'))</h3>
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{ __('You are logged in!') }}
        </div>
    </div>
</div>
@endsection
