<div class="box box-info padding-1">
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Datos Equipo</h6>
                    </div>
                </div>
            </div>

            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                        {{ Form::label('N° Inventario') }}
                        {{ Form::text('n_invenatario', $inventario->n_invenatario, ['class' => 'form-control' . ($errors->has('n_invenatario') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Inventario']) }}
                        {!! $errors->first('n_invenatario', '<div class="invalid-feedback">:message
                        </div>') !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('Depto') }}
                        {{ Form::text('unidad', $inventario->unidad, ['class' => 'form-control' . ($errors->has('unidad') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Unidad']) }}
                        {!! $errors->first('unidad', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('Dirección MAC') }}
                        {{ Form::text('mac', $inventario->mac, ['class' => 'form-control' . ($errors->has('mac') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese MAC address']) }}
                        {!! $errors->first('mac', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('recinto') }}
                        {{ Form::text('recinto', $inventario->recinto, ['class' => 'form-control' . ($errors->has('recinto') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Recinto']) }}
                        {!! $errors->first('recinto', '<div class="invalid-feedback">:message</div>')
                        !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('Ip') }}
                        {{ Form::text('ip', $inventario->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Dirección IP']) }}
                        {!! $errors->first('ip', '<div class="invalid-feedback">:message</div>') !!}
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Datos Funcionario</h6>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                    {{ Form::label('recepciona') }}
                    {{ Form::text('recepciona', $inventario->recepciona, ['class' => 'form-control' . ($errors->has('recepciona') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Su Nombre']) }}
                    {!! $errors->first('recepciona', '<div class="invalid-feedback">:message</div>')
                    !!}
                </div>
                <div class="col-md-6">
                    {{ Form::label('entrega') }}
                    {{ Form::text('entrega', $inventario->entrega, ['class' => 'form-control' . ($errors->has('entrega') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Funcionario']) }}
                    {!! $errors->first('entrega', '<div class="invalid-feedback">:message</div>')
                    !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Datos Relacionales</h6>
                </div>

            </div>
        </div>
        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                    {{ Form::label('N° serie') }}

                    <select class="js-example-basic-single js-states form-control" id="select2" name="id_registroSerie">
                        @foreach ($series as $series)
                        <option value="{{ $series->id }}">{{ $series->serie }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('id_registroSerie', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-md-6">
                    {{ Form::label('Clase de Equipo') }}
                    {{ Form::select('id_tipoEquipo',$TipoEquipos, $inventario->id_tipoEquipo, ['class' => 'form-control' . ($errors->has('id_tipoEquipo') ? ' is-invalid' : ''), 'placeholder' => '----']) }}
                    {!! $errors->first('id_tipoEquipo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-md-6">
                    {{ Form::label('Modelo') }}
                    {{ Form::select('id_modelo',$modelos, $inventario->id_modelo, ['class' => 'form-control' . ($errors->has('id_modelo') ? ' is-invalid' : ''), 'placeholder' => '----']) }}
                    {!! $errors->first('id_modelo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-md-6">
                    {{ Form::label('Marca') }}
                    {{ Form::select('id_marca',$marcas, $inventario->id_marca, ['class' => 'form-control' . ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => '----']) }}
                    {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>




@section('scripts')
<script>
$(document).ready(function() {
    $('#select2').select2();
    $('#select2').on(change),
        function(e) {
            let valor = $('#select2').select2('val');
            let texto = $('#select2 option:selected').texto();
        }
});
</script>

@endsection
