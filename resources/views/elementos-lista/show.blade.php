@extends('layouts.app')

@section('template_title')
    {{ $elementosLista->name ?? 'Show Elementos Lista' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Elementos Lista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('elementos-listas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $elementosLista->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Lista Id:</strong>
                            {{ $elementosLista->tipo_lista_id }}
                        </div>
                        <div class="form-group">
                            <strong>Elemento Lista Id:</strong>
                            {{ $elementosLista->elemento_lista_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
