@extends('layouts.home')

@section('template_title')
    {{ $guia->name ?? 'Show Guia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Guia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('guias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $guia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Proveedor:</strong>
                            {{ $guia->id_proveedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
