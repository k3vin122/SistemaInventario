@extends('layouts.dashboardBase')

@section('template_title')
Inventario
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Inventario') }}
                        </span>
                        <h4 class="mb-0">Equipos entregados : {{$invenatrycount}}</h4>
                        <span id="card_title">
                            <div class="panel panel-success">
                                <form action="{{route('inventarios.index')}}" method="GET" class="d-flex">
                                    <div class="d-flex justify-content-center h-100">
                                        <div class="searchbar">
                                            <input class="search_input" type="text" name="busqueda"
                                                placeholder="Search...">
                                            <input class="search_icon" value="Buscar" type="submit">

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </span>


                        <div class="float-right">
                            <a href="{{ route('inventarios.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo Registro') }}
                            </a>
                        </div>
                    </div>
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
                                    <th>N° Inventario</th>
                                    <th>Depto</th>
                                    <th>Mac</th>
                                    <th>Recinto</th>
                                    <th>Ip</th>
                                    <th>Recepciona</th>
                                    <th>Entrega</th>
                                    <th>N° Serie</th>
                                    <th>Tipo equipo</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventarios as $inventario)
                                <tr>
                                    <td>{{ $inventario->n_invenatario }}</td>
                                    <td>{{ $inventario->unidad }}</td>
                                    <td>{{ $inventario->mac }}</td>
                                    <td>{{ $inventario->recinto }}</td>
                                    <td>{{ $inventario->ip }}</td>
                                    <td>{{ $inventario->recepciona }}</td>
                                    <td>{{ $inventario->entrega }}</td>
                                    <td>{{ $inventario->RegistroSeries->serie }}</td>
                                    <td>{{ $inventario->TipoEquipo->nombre }}</td>
                                    <td>{{ $inventario->modelo->nombre }}</td>
                                    <td>{{ $inventario->marca->nombre }}</td>
                                    <td>
                                        <form action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('inventarios.edit',$inventario->id) }}"><i
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
            {!! $inventarios->appends(['busqueda_inventario']) !!}
        </div>
    </div>
</div>


@endsection