@extends('layouts.home')

@section('template_title')
    Create Registro Series
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                
            <div class="card card-default">
                <h1>Importar N° serie equipos </h1>

                <span class="card-title"><i>¡Importe libros de trabajo .xlsx</i> </span>
            </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registro-series.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('registro-series.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
