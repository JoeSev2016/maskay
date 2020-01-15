@extends('home')
@section('title', '| Anuncios')

@section('styles')
    {{ Html::style('css/select2.min.css') }}
@endsection    

@section('content')
	<div class="row clearfix">
 		<div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="red">
                	<h4 class="card-title">Crear Anuncio</h4>
                </div>
                <div class="card-content">
                	{!! Form::open(['route' => 'adverts.store', 'method' => 'POST']) !!}
                	{{ csrf_field() }}
                	<div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" placeholder="Ingrese Titulo">
                                </div>
                            </div>
                        </div>
                    </div>    
					<div class="row clearfix">

                        {{-- Extracto --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="extract" placeholder="Ingrese Extracto">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix">
                        {{-- Cuerpo del Texto --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="body" placeholder="Ingrese Texto" rows="5" id=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        {{-- Slug --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="slug" placeholder="Ingrese Slug">
                                </div>
                            </div>
                        </div>

                        {{-- Categoria --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="category_id">
					                    @foreach ($categories as $category)
					                        <option value="{{ $category->id }}">{{ $category->name }}</option>
					                    @endforeach
					                </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Combos Dinamicos --}}
                      <div class="row">
                        {{-- Combo Departamento --}}
                        <div class="col-md-4">
                          <select name="department_id" class="form-control" id="select-department">
                            <option value="">Seleccione Departamento</option>
                            @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        {{-- Combo Provincia --}}
                        <div class="col-md-4">
                          <select name="province_id" class="form-control" id="select-province">
                            <option value="">Seleccione Provincia</option>
                          </select>
                        </div>
                        {{-- Combo Distrito --}}
                        <div class="col-md-4">
                          <select name="district_id" class="form-control" id="select-district">
                            <option value="">Seleccione Distrito</option>
                          </select>
                        </div>
                      </div>

                    {{-- Etiquetas --}}
                      <div class="row">
                          <div class="col-md-6">
                              <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                                <option value="">Seleccione Etiquetas</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="customer_id">
                                        <option value="">Seleccione Cliente</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>
                    <br>

                    <div class="row clearfix">
                    	<div class="col-md-6">
                    		<div class="form-group">
                    			<div class="form-line">
                    				<button type="submit" class="btn btn-danger">Crear Anuncio</button>
                    			</div>
                    		</div>
                    	</div>
                    </div>

                    {!! Form::close() !!}
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

@section('scripts')
  <script src="/js/admin/adverts/create.js"></script>
  {!!Html::script('js/select2.min.js')!!}
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection