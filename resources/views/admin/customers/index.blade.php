@extends('home')
@section('title', '| Clientes')
@section('content')
	<div class="col-lg-3">
		<a href="{{ route('customers.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Registrar Cliente</a>
	</div>
	<div class="col-lg-12">
		<div class="card">

			<div class="card-header" data-background-color="orange">
            <h4 class="card-title">Listado de Clientes</h4>
    		</div>

    		<div class="card-content table-responsive">
	    		<table class="table">
	    			<thead class="text-primary">
	                    <th>#</th>
	                    <th>Nombre</th>
	                    <th>E-mail</th>
	                    <th>Contácto</th>
	                    <th class="text-center">Operaciones</th>
	                </thead>
	                <tbody>
	                    @foreach ($customers as $customer)
	                        <tr>
	                            <td>{{ $customer->id }}</td>
	                            <td>{{ $customer->name }}</td>
	                            <td>{{ $customer->email }}</td>
	                            <td>{{ $customer->contact_number }}</td>
	                            <td class=" text-center">
	                                <button type="button" rel="tooltip" title="Ver Cliente" class="btn btn-info btn-round btn-sm">
					                    <i class="material-icons">visibility</i>
					                </button>
					                <button type="button" rel="tooltip" title="Editar Cliente" class="btn btn-success btn-round btn-sm">
					                    <i class="material-icons">edit</i>
					                </button>
					                <button type="button" rel="tooltip" title="Eliminar Cliente" class="btn btn-danger btn-round btn-sm">
					                    <i class="material-icons">close</i>
					                </button>
	                            </td>
	                        </tr>
	                    @endforeach
	                </tbody>
	    		</table>
	    		<div class="text-center">
	                {!! $customers->links(); !!}
	            </div>
	    	</div>
	    	
    	</div>
    </div>

@endsection