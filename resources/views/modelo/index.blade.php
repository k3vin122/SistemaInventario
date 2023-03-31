@extends('layouts.home')

@section('template_title')
    Modelo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Modelo') }}
                            </span>
                            <h4 class="mb-0">Total Modelos Registrados: {{$countmodelo}}</h4>
                             <div class="float-right">
                                <a href="{{ route('modelos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Code</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modelos as $modelo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $modelo->nombre }}</td>

                                            <td>
                                                <form action="{{ route('modelos.destroy',$modelo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('modelos.edit',$modelo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $modelos->links() !!}
            </div>
        </div>
    </div>
@endsection
