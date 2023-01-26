@extends('welcome')
@section('contenido')
   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Actualizacion de Persona</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('persona.update', $personas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Nombre de Persona</label>
                                    <input type="text" class="form-control"  placeholder="Nombre de Persona" name="nombre" value="{{$personas->nombre}}">
                                </div>
                                <div class="form-group">
                                    <label >Cedula de Persona</label>
                                    <input type="text" class="form-control"  placeholder="Cedula de Persona" name="cedula" value="{{$personas->cedula}}">
                                </div>
                                                          
                                <div>
                                    <button class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                    </div>
                </div>
    </section>
@endsection