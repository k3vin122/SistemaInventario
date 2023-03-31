@extends('layouts.home')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>N Invenatario:</strong>
                            {{ $inventario->n_invenatario }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad:</strong>
                            {{ $inventario->unidad }}
                        </div>
                        <div class="form-group">
                            <strong>Mac:</strong>
                            {{ $inventario->mac }}
                        </div>
                        <div class="form-group">
                            <strong>Recinto:</strong>
                            {{ $inventario->recinto }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $inventario->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Recepciona:</strong>
                            {{ $inventario->recepciona }}
                        </div>
                        <div class="form-group">
                            <strong>Entrega:</strong>
                            {{ $inventario->entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Id Registroserie:</strong>
                            {{ $inventario->id_registroSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipoequipo:</strong>
                            {{ $inventario->id_tipoEquipo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Modelo:</strong>
                            {{ $inventario->id_modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Marca:</strong>
                            {{ $inventario->id_marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
