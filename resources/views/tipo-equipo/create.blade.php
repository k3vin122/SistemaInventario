@extends('layouts.home')

@section('template_title')
Create Tipo Equipo
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <h1> Crear Nuevo Tipo de Equipo</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tipo-equipos.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('tipo-equipo.form')

                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
@endsection
