<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('N° Guía') }}
            {{ Form::text('nombre', $guia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese guía']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::select('id_proveedor', $x1, $guia->id_proveedor, ['class' => 'form-control' . ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => '----']) }}
            {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="text-center">
        <div style="display: inline-block;">
            <a href="{{ route('guias.index') }}" class="button button2">Volver</a>
        </div>
        <div style="display: inline-block;">
            <button type="submit" class="button button3">Guardar</button>
        </div>
    </div>
</div>
