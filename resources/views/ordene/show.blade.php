@extends('layouts.home')

@section('template_title')
    {{ $ordene->name ?? 'Show Ordene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ordene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ordene->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Guia:</strong>
                            {{ $ordene->id_guia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
