@extends('layouts.home')

@section('template_title')
Create Inventario
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <h1>Entrega de Equipamineto</h1>

                <span class="card-title"><i>Aquí podremos registra un nuevo equipo, que vaya ser instalado.…</i> </span>

            </div>
            <br>
            <div class="card-body">
                <form method="POST" action="{{ route('inventarios.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('inventario.form')

                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection