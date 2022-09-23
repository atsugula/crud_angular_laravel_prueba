<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_identificacion') }}
            {{ Form::text('numero_identificacion', $tercero->numero_identificacion, ['class' => 'form-control' . ($errors->has('numero_identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Numero Identificacion']) }}
            {!! $errors->first('numero_identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre1') }}
            {{ Form::text('nombre1', $tercero->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $tercero->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre2']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $tercero->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $tercero->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento_id') }}
            {{ Form::text('departamento_id', $tercero->departamento_id, ['class' => 'form-control' . ($errors->has('departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento Id']) }}
            {!! $errors->first('departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad_id') }}
            {{ Form::text('ciudad_id', $tercero->ciudad_id, ['class' => 'form-control' . ($errors->has('ciudad_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Id']) }}
            {!! $errors->first('ciudad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_tercero_id') }}
            {{ Form::text('tipo_tercero_id', $tercero->tipo_tercero_id, ['class' => 'form-control' . ($errors->has('tipo_tercero_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Tercero Id']) }}
            {!! $errors->first('tipo_tercero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_contribuyente_id') }}
            {{ Form::text('tipo_contribuyente_id', $tercero->tipo_contribuyente_id, ['class' => 'form-control' . ($errors->has('tipo_contribuyente_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Contribuyente Id']) }}
            {!! $errors->first('tipo_contribuyente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_identificacion_id') }}
            {{ Form::text('tipo_identificacion_id', $tercero->tipo_identificacion_id, ['class' => 'form-control' . ($errors->has('tipo_identificacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Identificacion Id']) }}
            {!! $errors->first('tipo_identificacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>