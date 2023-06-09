@extends('layouts.home')

@section('template_title')
Create Proveedore
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <h1> Crear Nuevo Proveedor</h1>

                    <span class="card-title">Aquí en este módulo podrás agregar un nuevo proveedor para ser utilizado en registro de equipo y guía.</span>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('proveedores.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('proveedore.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection