@extends('layouts.home')

@section('template_title')
Create Guia
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <h1>Registrar Nueva Guía</h1>

                    <span class="card-title">Aquí en este módulo podrás registra un N° de guía asociado a un proveedor </span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('guias.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('guia.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection