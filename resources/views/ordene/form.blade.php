<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('N° Orden Compra') }}
            {{ Form::text('nombre', $ordene->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Orden']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° Guia') }}
            {{ Form::select('id_guia', $guias, $ordene->id_guia, ['class' => 'form-control' . ($errors->has('id_guia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_guia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="text-center">
        <div style="display: inline-block;">
            <a href="{{ route('ordenes.index') }}" class="button button2">Volver</a>
        </div>
        <div style="display: inline-block;">
            <button type="submit" class="button button3">Guardar</button>
        </div>
    </div>
</div>
