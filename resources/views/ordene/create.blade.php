@extends('layouts.home')

@section('template_title')
    Create Ordene
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ordenes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ordene.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
