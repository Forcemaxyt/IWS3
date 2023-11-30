
  <!-- Modal Edit -->
  <div class="modal fade" id="edit{{$empleados->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Empleado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('empleado.update',$empleados->ID)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="" value="{{$empleados->Nombre}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input type="text"
              class="form-control" name="Apellido" id="" aria-describedby="helpId" placeholder="" value="{{$empleados->Apellido}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text"
              class="form-control" name="Cargo" id="" aria-describedby="helpId" placeholder="" value="{{$empleados->Cargo}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Departamento</label>
            <input type="text"
              class="form-control" name="Departamento" id="" aria-describedby="helpId" placeholder="" value="{{$empleados->Departamento}}">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>






  
  <!-- Modal Delete -->
  <div class="modal fade" id="delete{{$empleados->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Empleado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('empleado.destroy',$empleados->ID)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">

            Estas seguro de eliminar a <strong>{{$empleados->Nombre}}?</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>