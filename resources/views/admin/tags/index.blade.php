@extends('home')
@section('title', '| Clientes')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header" data-background-color="orange">
                    <h4 class="card-title">Listado de Etiquetas</h4>
            	</div>

				<div class="card-content table-responsive">
					<table class="table">
						<thead class="text-primary">
		                    <th>#</th>
		                    <th>Nombre</th>
		                    <th class="text-center">Operaciones</th>
	                	</thead>
	                	<tbody>
	                		@foreach ($tags as $tag)
	                			<tr>
	                            	<td>{{ $tag->id }}</td>
	                            	<td>{{ $tag->name }}</td>
	                            	<td class=" text-center">
		                                <button type="button" rel="tooltip" title="Ver Etiqueta" class="btn btn-info btn-round btn-sm">
						                    <i class="material-icons">visibility</i>
						                </button>
						                <button type="button" rel="tooltip" title="Editar Etiqueta" class="btn btn-success btn-round btn-sm">
						                    <i class="material-icons">edit</i>
						                </button>
	                            	</td>
	                        	</tr>
	                		@endforeach
	                	</tbody>
					</table>
					<div class="text-center">
						{!! $tags->links(); !!}
					</div>
				</div>
	
			</div>
		</div>
	</div>
@endsection