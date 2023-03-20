@extends('layouts.dashboardBase')

@section('template_title')
Create Marca
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <h1> Crear Nuevo Marca</h1>

                    <span class="card-title">Aquí en este módulo podrás agregar un nuevo marca de equipo para ser utilizado en
                        registro de inventario.</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('marcas.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('marca.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection