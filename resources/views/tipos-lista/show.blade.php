@extends('layouts.app')

@section('template_title')
    {{ $tiposLista->name ?? 'Show Tipos Lista' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipos Lista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipos-listas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tiposLista->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
