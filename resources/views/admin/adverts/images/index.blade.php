@extends('home')
@section('title', '| Imagenes del Anuncio')
@section('content')
	<div class="row clearfix">
		<div class="col-md-6">
			{!! Form::open(array('route' => 'upload', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data')) !!}
			{{ csrf_field() }}
			{{ Form::hidden('advert_id', $advert->id) }}
			{{ Form::hidden('advert_slug', $advert->slug) }}
            <input type="file" name='image' required="Seleccione una imagen">
			{{ Form::submit('Subir Imagen', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
		</div>
 		<div class="col-lg-12">
            <div class="card">
            	<div class="card-header" data-background-color="red">
                	<h4 class="card-title">Imagenes del Anuncio "{{ $advert->title }}"</h4>
                </div>
                <div class="card-content">
					@foreach ($images as $image)
						<div class="col-md-3">
	                      <div class="card">
	                        {{-- <img class="card-img-top" src="{{ $image->url }}" alt="Card image cap"> --}}
	                        @if (substr($image->image, 0, 4) == "http")
	                        	<img class="card-img-top" src="{{ $image->image }}" alt="Card image cap">
	                        @else
	                        	<img class="card-img-top" src="{{ url('/storage/adverts/' . $advert->slug . '/' . $image->image) }}" alt="Card image cap">
	                        @endif
	                        {!! Form::open(['route'=>['images.destroy', $image->id, $advert->id], 'method'=>'delete']) !!}
	                        	@if ($image->featured)
						      	 	<button type="button" class="btn btn-success btn-circle" rel="tooltip" title="Imagen destacada actualmente">
							      	 	<i class="material-icons">favorite</i>
							      	</button>
						      	@else
						      	 	<a href="{{ route('images.select', ['idImg'=>$image->id, 'idAnu'=>$advert->id]) }}" class="btn btn-info btn-circle">
							      	 	<i class="material-icons">favorite_border</i>
							      	</a>
						      	@endif
	                        	{!! Form::submit('Eliminar', ['class'=>'btn btn-danger btn-xs']) !!}
	                        {!! Form::close() !!}
	                      </div>
	                    </div>
					@endforeach
                </div>
            </div>
 		</div>
 	</div>
 	<div class="row clearfix">
		<div class="col-sm-3">
			{!! Html::linkRoute('adverts.index','<< Regresar a los anuncios',[], array('class'=>'btn btn-default btn-block')) !!}
		</div>
	</div>
@endsection