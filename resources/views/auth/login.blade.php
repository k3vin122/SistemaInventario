@extends('layouts.homeLogin')

@section('content')

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="images/logo/logo.png" alt="" />

                        </div>

                        <div class="mx-auto" style="width: 500px;">
                        <h2 style="color:#FDFEFA">Sistema de Infromación TI</h2>
                        </div>

                    </div>

                    <div class="login_form">

                        <fieldset>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="field">

                                    <label class="label_field">Rut :</label>

                                    <input id="email" type="text" placeholder="9999999-9" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>


                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label_field">Contraseña :</label>


                                    <input id="password" placeholder="Ingrese Contraseña " type="password"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label"><input type="checkbox"
                                                    class="form-check-input"> Recordar</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="main_bt">
                                            {{ __('Iniciar sesión') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection