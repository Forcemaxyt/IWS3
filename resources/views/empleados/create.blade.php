
  <!-- Modal Create -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Empleado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('empleado.store')}}" method="post">
            @csrf
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input type="text"
              class="form-control" name="Apellido" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text"
              class="form-control" name="Cargo" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Departamento</label>
            <input type="text"
              class="form-control" name="Departamento" id="" aria-describedby="helpId" placeholder="">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>