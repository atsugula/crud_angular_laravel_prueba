@extends('layouts.app')

@section('template_title')
    Tercero
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tercero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('terceros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Numero Identificacion</th>
										<th>Nombre1</th>
										<th>Nombre2</th>
										<th>Apellido1</th>
										<th>Apellido2</th>
										<th>Departamento Id</th>
										<th>Ciudad Id</th>
										<th>Tipo Tercero Id</th>
										<th>Tipo Contribuyente Id</th>
										<th>Tipo Identificacion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($terceros as $tercero)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tercero->numero_identificacion }}</td>
											<td>{{ $tercero->nombre1 }}</td>
											<td>{{ $tercero->nombre2 }}</td>
											<td>{{ $tercero->apellido1 }}</td>
											<td>{{ $tercero->apellido2 }}</td>
											<td>{{ $tercero->departamento_id }}</td>
											<td>{{ $tercero->ciudad_id }}</td>
											<td>{{ $tercero->tipo_tercero_id }}</td>
											<td>{{ $tercero->tipo_contribuyente_id }}</td>
											<td>{{ $tercero->tipo_identificacion_id }}</td>

                                            <td>
                                                <form action="{{ route('terceros.destroy',$tercero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('terceros.show',$tercero->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('terceros.edit',$tercero->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $terceros->links() !!}
            </div>
        </div>
    </div>
@endsection
