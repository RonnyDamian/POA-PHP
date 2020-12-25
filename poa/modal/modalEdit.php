<!-- Modal -->
<div class="modal fade" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="exampleModalLabel">
          <i class="fas fa-pencil-alt"></i>
          &nbsp;Editar Empresa
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCompanyu" method="post" onsubmit="return updateCompany();">
          <div class="row">
            <div class="col-lg-6">
              <label for="empresa">Empresa</label>
              <input type="text" class="form-control" name="empresau" id="empresau" required>
            </div>
            <div class="col-lg-6">
              <label for="gNegociou">Giro de Negocio</label>
              <input type="text" class="form-control" name="gNegociou" id="gNegociou" required>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-6">
              <label for="emailu">Email</label>
              <input type="email" class="form-control" name="emailu" id="emailu" required>
            </div>
            <div class="col-lg-6">
              <label for="contactou">Número de Contacto</label>
              <input type="text" class="form-control" name="contactou" id="contactou" required>
              <input type="hidden" class="form-control" name="id_Empresa" id="id_Empresa" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">
              <i class="fas fa-times"></i>
              &nbsp; Cerrar
            </button>
            <button type="submit" class="btn btn-success">
              <i class="fas fa-edit"></i>
              &nbsp;Actualizar
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
