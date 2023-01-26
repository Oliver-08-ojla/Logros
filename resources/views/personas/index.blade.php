@extends('welcome')

@section('contenido')
    

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Todas las Personas</h3>
        </div>
        <!-- /.card-header -->
        <div class="px-4">
            <a href="{{route('persona.ordenar')}}" class="btn btn-success">Ordenar</a>
        </div>

        <div class="card-body ">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>id</th>
              <th>Nombre de Persona</th>
              <th>Cedula</th>
              <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($personas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->cedula}}</td>
                   
                     <td class="d-flex justify-content-center">
                        <a href="{{route('persona.editar',$item->id)}}" class="btn btn-primary ">Edit</a>
                        <form action="{{route('persona.delete',$item->id)}}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2 ">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                </tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>


@endsection

