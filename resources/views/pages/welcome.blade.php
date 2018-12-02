@extends('home')
@section('title', '| Bienvenido')
@section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                
                            </div>
                            <div class="card-content">
                                <h4 class="title">Bienvenido {{ Auth::user()->name }} al sistema Maskay.</h4>
                            </div>  
                        </div>  
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
@endsection