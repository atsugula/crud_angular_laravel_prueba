<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $elementosLista->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_lista_id') }}
            {{ Form::text('tipo_lista_id', $elementosLista->tipo_lista_id, ['class' => 'form-control' . ($errors->has('tipo_lista_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Lista Id']) }}
            {!! $errors->first('tipo_lista_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('elemento_lista_id') }}
            {{ Form::text('elemento_lista_id', $elementosLista->elemento_lista_id, ['class' => 'form-control' . ($errors->has('elemento_lista_id') ? ' is-invalid' : ''), 'placeholder' => 'Elemento Lista Id']) }}
            {!! $errors->first('elemento_lista_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>