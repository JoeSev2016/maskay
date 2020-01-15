@extends('home')
@section('title', '| Registrar Cliente')
@section('content')
	<div class="row clearfix">
		<div class="col-md-12">
			<div class="card">
                <div class="card-header" data-background-color="red">
                	<h4 class="card-title">Registrar Cliente</h4>
                </div>
                <div class="card-content">
                	{!! Form::open(['route' => 'customers.store', 'method' => 'POST']) !!}
                	{{ csrf_field() }}

                    {{ Form::hidden('user_id', Auth::user()->id) }}

                	{{-- Documento --}}
                	<div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="document_id">
					                    @foreach ($documents as $document)
					                        <option value="{{ $document->id }}">{{ $document->name }}</option>
					                    @endforeach
					                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="doc_num" placeholder="Ingrese Numero de Documento">
                                </div>
                            </div>
                        </div>
                    </div>
					
					{{-- Nombre --}}
                	<div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre">
                                </div>
                            </div>
                        </div>
                    </div>
					
					{{-- Ingrese E-mail y Numero --}}
					<div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" placeholder="Ingrese E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_number" placeholder="Ingrese Numero de Contacto">
                                </div>
                            </div>
                        </div>
                    </div>

					{{-- Direccion --}}
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="address" placeholder="Ingrese Direccion">
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <button type="submit" class="btn btn-danger">Registrar Cliente</button>
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
            {!! Html::linkRoute('customers.index','<< Regresar a los clientes',[], array('class'=>'btn btn-default btn-block')) !!}
        </div>
    </div>
@endsection

@section('scripts')
  <script src="/js/admin/customers/create.js"></script>
@endsection