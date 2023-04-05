@extends('layouts.home')


@section('template_title')
Proveedore
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Proveedor') }}
                        </span>
                        <h4 class="mb-0">Total Proveedores : {{$countproveedor}}</h4>


                        <div class="float-right">
                            <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo Registro') }}
                            </a>
                        </div>
                    </div>

                    <span id="card_title">
                        <div class="panel panel-success">
                            <form action="{{route('proveedores.index')}}" method="GET" class="d-flex">
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
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Rut</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedore)
                                <tr>
                                    <td>{{ $proveedore->nombre }}</td>
                                    <td>{{ $proveedore->direccion }}</td>
                                    <td>{{ $proveedore->rol }}</td>

                                    <td>
                                        <form action="{{ route('proveedores.destroy',$proveedore->id) }}" method="POST">

                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('proveedores.edit',$proveedore->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button  disabled="true"type="submit" class="btn btn-danger btn-sm"><i
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
            {!! $proveedores->appends(['busqueda_inventario']) !!}



        </div>
    </div>
</div>
@endsection
