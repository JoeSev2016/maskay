@extends('home')
@section('title', '| Anuncios')
@section('content')
	<div class="row">

		<div class="col-lg-3">
			<a href="{{ route('adverts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Crear Anuncio</a>
		</div>
 		<div class="col-lg-12">
 			<div class="card">
 				<div class="card-header" data-background-color="orange">
                    <h4 class="card-title">Listado de Anuncios</h4>
            	</div>
            	<div class="card-content table-responsive">
            		<table class="table">
            			<thead class="text-primary">
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th class="text-center">Operaciones</th>
                        </thead>
                        <tbody>
                            @foreach ($adverts as $advert)
                                <tr>
                                    <td>{{ $advert->id }}</td>
                                    <td>{{ $advert->title }}</td>
                                    <td>{{ $advert->category->name ?: 'No asignado' }}</td>
                                    <td class=" text-center">
                                        <button type="button" rel="tooltip" title="Ver Anuncio" class="btn btn-info btn-round btn-sm">
						                    <i class="material-icons">visibility</i>
						                </button>
						                <button type="button" rel="tooltip" title="Editar Anuncio" class="btn btn-success btn-round btn-sm">
						                    <i class="material-icons">edit</i>
						                </button>
						                <a href="{{ route('images.show', $advert->id) }}" rel="tooltip" title="Agregar Imagen" class="btn btn-warning btn-round btn-sm">
						                	<i class="material-icons">photo</i>
						                </a>
						                <button type="button" rel="tooltip" title="Eliminar Anuncio" class="btn btn-danger btn-round btn-sm">
						                    <i class="material-icons">close</i>
						                </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
            		</table>
            		<div class="text-center">
                        {!! $adverts->links(); !!}
                    </div>
            	</div>
 			</div>
 		</div>
 	</div>

 	{{-- Formulario Modal Crear Advert --}}
	<div class="modal fade" tabindex="-1" role="dialog" id="modalCreateAdvert" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Crear Anuncio</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	        {!! Form::open(['route' => 'adverts.store', 'method' => 'POST']) !!}
	            {{ csrf_field() }}
	            <div class="modal-body">
	            {{-- <input type="hidden" name="project_id" value="{{ $project->id }}"> --}}
	            {{-- {{ Form::hidden('category_id', $category->id, ['id' => 'category_id']) }} --}}
	            {{-- {{ Form::label('title', 'Titulo:') }} --}}
	            {{-- {{ Form::text('title', null, ['class'=>'form-control']) }} --}}
	            <input type="text" class="form-control" name="title" placeholder="Ingrese Titulo">
	            {{-- {{ Form::label('extract', 'Extracto:') }} --}}
	            {{-- {{ Form::text('extract', null, ['class'=>'form-control']) }} --}}
	            <input type="text" class="form-control" name="extract" placeholder="Ingrese Extracto">
	            {{-- {{ Form::label('body', 'Texto:') }} --}}
    			{{-- {{ Form::textarea('body', null, array('class' => 'form-control','required' => '')) }} --}}
    			<textarea class="form-control" name="body" placeholder="Ingrese Texto" rows="5" id=""></textarea>
    			{{-- {{ Form::label('slug', 'Slug:') }} --}}
    			{{-- {{ Form::text('slug', null, array('class'=>'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }} --}}
    			<input type="text" class="form-control" name="slug" placeholder="Ingrese Slug">
    			<select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
	            </div>
	            <div class="modal-footer">
	              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	              <button type="submit" class="btn btn-primary">Crear Anuncio</button>
	              {{-- {{ Form::submit('Crear Anuncio',['class'=>'btn btn-primary']) }} --}}
	            </div>
	        {!! Form::close() !!}    
	    </div>
	  </div>
	</div>
	{{-- Terina el formulario --}}
@endsection

@section('scripts')
  {{-- Carpeta js de public --}}
  {{-- <script src="/js/admin/adverts/create.js"></script> --}}
@endsection