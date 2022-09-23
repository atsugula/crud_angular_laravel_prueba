@extends('layouts.app')

@section('template_title')
    {{ $tercero->name ?? 'Show Tercero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tercero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('terceros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Identificacion:</strong>
                            {{ $tercero->numero_identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $tercero->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $tercero->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $tercero->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $tercero->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $tercero->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad Id:</strong>
                            {{ $tercero->ciudad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Tercero Id:</strong>
                            {{ $tercero->tipo_tercero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Contribuyente Id:</strong>
                            {{ $tercero->tipo_contribuyente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Identificacion Id:</strong>
                            {{ $tercero->tipo_identificacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
