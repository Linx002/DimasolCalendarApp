@extends('layouts.layoutdimasol(blue)')

@section('content')

<div class="dimasol-container" style="padding:128px 16px">
    <div class="dimasol-row justify-content-center">
        <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
            <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                <!-- <h2>{{ __('Register') }}</h2> -->
                <h2>Registro de usuarios</h2>
            </div>

            <div class="dimasol-container dimasol-quarter">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
                        <label for="name" class="dimasol-col.m4">Nombre</label>
                        <div class="dimasol-col.m6">
                            <input id="name" class="dimasol-input dimasol-padding-16 dimasol-border" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                        <label for="email" class="dimasol-col.m4">Correo Electrónico</label>
                        <div class="dimasol-col.m6">
                            <input id="email" class="dimasol-input dimasol-padding-16 dimasol-border" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
                        <label for="password" class="dimasol-col.m4">Contraseña</label>
                        <div class="dimasol-col.m6">
                            <input class="dimasol-input dimasol-padding-16 dimasol-border" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                        <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->
                        <label for="password-confirm" class="dimasol-col.m4">Confirmación de contraseña</label>
                        <div class="dimasol-col.m6">
                            <input id="password-confirm" class="dimasol-input dimasol-padding-16 dimasol-border" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="dimasol-row-padding dimasol-padding-16 dimasol-container">
                        <div class="dimasol-col.m6">
                            <button type="submit" class="dimasol-button dimasol-black dimasol-padding-large">
                                <!-- {{ __('Register') }} -->
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
