@extends('layouts.home')

@section('template_title')
Registro Series
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Registro  serie equipo') }}
                        </span>

                        <h4 class="mb-0">Equipos Registrados en sistema  : {{$countregistroSeries}}</h4>


                        <div class="float-right">
                            <a href="{{ route('registro-series.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Importar documento') }}
                            </a>
                        </div>
                    </div>



                    <span id="card_title">
                        <div class="panel panel-success">
                            <form action="{{route('registro-series.index')}}" method="GET" class="d-flex">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="searchbar">
                                        <input class="search_input" type="text" name="busqueda"
                                            placeholder="">
                                        <input class="search_icon" value="Buscar" type="submit">

                                    </div>
                                </div>

                            </form>
                        </div>
                    </span>



                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>

                                    <th>N° serie</th>
                                    <th>N° Guía</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registroSeries as $x1)

                                <tr>

                                    <td>{{ $x1->serie }}</td>
                                    <td>{{ $x1->guia->nombre }}</td>

                                    <td>
                                        <form action="{{ route('registro-series.destroy',$x1->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('registro-series.edit',$x1->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $registroSeries->appends(['busqueda_inventario']) !!}

        </div>
    </div>
</div>
@endsection
