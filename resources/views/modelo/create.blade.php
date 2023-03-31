@extends('layouts.home')

@section('template_title')
Create Modelo
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')


            <div class="card card-default">
                <h1>Registrar Nuevo Modelo</h1>

                <span class="card-title"><i>Aquí podremos registra un nuevo modelo, este nos sirvira a la hora de
                        registra un equipo</i> </span>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('modelos.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('modelo.form')

                </form>

            </div>
        </div>
    </div>
</section>

@endsection