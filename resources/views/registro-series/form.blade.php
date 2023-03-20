<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('serie') }}
            {{ Form::text('serie', $registroSeries->serie, ['class' => 'form-control' . ($errors->has('serie') ? ' is-invalid' : ''), 'placeholder' => 'Serie']) }}
            {!! $errors->first('serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_guia') }}
            {{ Form::text('id_guia', $registroSeries->id_guia, ['class' => 'form-control' . ($errors->has('id_guia') ? ' is-invalid' : ''), 'placeholder' => 'Id Guia']) }}
            {!! $errors->first('id_guia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>