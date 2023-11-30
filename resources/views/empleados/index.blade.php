@extends('dashboard2')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo
  </button>

    <div class="table-responsive">
        <br>
        <table class="table table-primary">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Departamento</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleado as $empleados)
                <tr class="">
                    <td scope="row">{{$empleados->ID}}</td>
                    <td>{{$empleados->Nombre}}</td>
                    <td>{{$empleados->Apellido}}</td>
                    <td>{{$empleados->Cargo}}</td>
                    <td>{{$empleados->Departamento}}</td>
                    <td><!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$empleados->ID}}">
                            Editar
                        </button>
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$empleados->ID}}">
                            Eliminar
                       </button>
                    </td>
                </tr>
                @include('empleados.info')
                @endforeach
            </tbody>
        </table>
    </div>
    
@include('empleados.create')

@endsection