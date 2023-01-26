@extends('welcome')

@section('contenido')


<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de Personas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('persona.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label >Nombre de Persona</label>
                            <input type="text" class="form-control"  placeholder="Nombre de Persona" name="nombre">
                        </div>
                        <div class="form-group">
                            <label >Cedula de Persona</label>
                            <input type="text" class="form-control"  placeholder="Cedula de persona" name="cedula">
                        </div>
                        
                        <div >
                           <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
    
@endsection