@extends('layouts.dashboardBase')

@section('template_title')
    {{ $registroSeries->name ?? 'Show Registro Series' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro Series</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registro-series.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $registroSeries->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Id Guia:</strong>
                            {{ $registroSeries->id_guia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
