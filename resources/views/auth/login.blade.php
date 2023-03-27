@extends('layouts.base')

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"

    style="background-image: url('assets/img/historia_5.jpg');">

        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">

            <div class="row">

                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Hospital Puerto Montt</h4>

                                <h6 class="text-white font-weight-bolder text-center mt-2 mb-0">Gestión de la información</h6>




                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Rut') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" class="form-control" type="text" placeholder="Ingrese Rut 11111111-1" name="email" value="{{ old('email') }}"
                                                required autocomplete="email" autofocus>


                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" class="form-control" placeholder="Ingrese Contraseña " type="password" name="password" required
                                                autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recordar') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Iniciar sesión') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
