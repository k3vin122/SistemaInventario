@extends('layouts.home')

@section('template_title')
Marca
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Marca') }}
                        </span>
                        <h4 class="mb-0">Total Marcas Registradas : {{$countmarcas}}</h4>


                        <div class="float-right">
                            <a href="{{ route('marcas.create') }}" class="btn btn-primary btn-sm float-right"
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
                                    <th>Code</th>
                                    <th>Marca</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marcas as $marca)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $marca->nombre }}</td>

                                    <td>
                                        <form action="{{ route('marcas.destroy',$marca->id) }}" method="POST">

                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('marcas.edit',$marca->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button disabled="true" type="submit" class="btn btn-danger btn-sm"><i
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
            {!! $marcas->links() !!}
        </div>
    </div>
</div>
@endsection
