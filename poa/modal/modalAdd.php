<!-- Modal -->
<div class="modal fade" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="exampleModalLabel">
        <i class="fas fa-plus-circle"></i>
            &nbsp;Añadir Empresa
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formAdd" method="post" onsubmit="return addCompany();">
            <div class="row">
                <div class="col-lg-6">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control" name="empresa" id="empresa" required minlength="2" maxlength="100">
                </div>
                <div class="col-lg-6">
                    <label for="empresa">Giro de Negocio</label>
                    <input type="text" class="form-control" name="gNegocio" id="gNegocio" required minlength="2" maxlength="100">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <label for="empresa">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required minlength="4" maxlength="100">
                </div>
                <div class="col-lg-6">
                    <label for="empresa">Número de Contacto</label>
                    <input type="text" class="form-control" name="contacto" id="contacto" required minlength="10" maxlength="10">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">
        <i class="fas fa-times"></i>
           &nbsp; Cerrar
        </button>
        <button  type="submit" class="btn btn-success">
        <i class="fas fa-save"></i>
          &nbsp;Guardar
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
