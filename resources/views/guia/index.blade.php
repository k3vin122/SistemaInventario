@extends('layouts.home')

@section('template_title')
    Guia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h1> Guia de Compra</h1>


                            <h4 class="mb-0">Guias Registradas : {{$countgia}}</h4>

                             <div class="float-right">
                                <a href="{{ route('guias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Registro') }}
                                </a>
                              </div>
                        </div>

                        <span id="card_title">
                            <div class="panel panel-success">
                                <form action="{{route('guias.index')}}" method="GET" class="d-flex">
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
                                        <th>Id</th>

										<th>Code</th>
										<th>Proveedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guias as $guia)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $guia->nombre }}</td>
											<td>{{ $guia->Proveedore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('guias.destroy',$guia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('guias.edit',$guia->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $guias->appends(['busqueda_inventario']) !!}

            </div>
        </div>
    </div>
@endsection
