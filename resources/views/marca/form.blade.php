<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $marca->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese  Marca']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <br>
    <div class="text-center">
        <div style="display: inline-block;">
            <a href="{{ route('marcas.index') }}" class="button button2">Volver</a>
        </div>
        <div style="display: inline-block;">
            <button type="submit" class="button button3">Guardar</button>
        </div>
    </div>
</div>
