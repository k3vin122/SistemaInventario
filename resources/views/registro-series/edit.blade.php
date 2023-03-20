@extends('layouts.dashboardBase')

@section('template_title')
    Update Registro Series
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Registro Series</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registro-series.update', $registroSeries->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registro-series.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
