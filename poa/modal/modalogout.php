<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro(a) que desea cerrar sesión?</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><b>&times;</b></span>
        </button>
      </div>
      <div class="modal-body">
        Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="controller/ControllerLogout.php">
        <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</div>


