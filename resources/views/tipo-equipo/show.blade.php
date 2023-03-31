@extends('layouts.home')

@section('template_title')
    {{ $tipoEquipo->name ?? 'Show Tipo Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-equipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoEquipo->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
