<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('nombre', $tipoEquipo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese tipo']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <br>
    <div class="text-center">
        <div style="display: inline-block;">
            <a href="{{ route('tipo-equipos.index') }}" class="button button2">Volver</a>
        </div>
        <div style="display: inline-block;">
            <button type="submit" class="button button3">Guardar</button>
        </div>
    </div>
</div>
