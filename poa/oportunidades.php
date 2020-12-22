<title>POA | Oportunidadea</title>
<?php
require_once("header.php");
?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Página Principal</a></li>
            <li class="breadcrumb-item active">Oportunidades</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12" >
          <!-- general form elements -->
          <div class="card card-warning" id="tabla1">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-table"></i> &nbsp;
                <strong>GENERADOR DE TABLAS</strong> </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  id="formOp"  method="post" onsubmit="return  data();">
              <div class="card-body row mt-3">
                <div class="col-md-4">
                  <label   class="text-dark"> N° DE PERSPECTIVAS</label>
                  <input type="number" min="1"  max="10" class="form-control" name="perspectiva" id="perspectiva" required onkeyup="generateInput(this.value)">
                </div>
                <div class="col-md-4">
                  <label class="text-dark" >N° DE FILAS POR PERSPECTIVA</label>
                  <input type="number" min="1"  max="10" class="form-control"  name="fila" id="fila" required>
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-warning float-left" style="margin-top:32px" >
                    <strong>Generar</strong>
                    <i class="fas fa-arrow-circle-right"></i>
                  </button>
                </div>
              </div>
              <div class="ml-3" id="campo"></div>
              <div class="ml-3" id="campo">
                <input type="text" value="" id="valor">
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->

          <div class="row">
            <div class="col-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-plus-circle"></i>
                    &nbsp;  <strong>OPORTUNIDADES</strong>
                  </h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" >
                  <table class="table table-head-fixed text-dark table-boreded">
                    <thead>
                    <tr>
                      <th style="width:20%;">Perspectiva</th>
                      <th style="width:40%;">Descripción</th>
                      <th class="text-center" style="width:5%;">U</th>
                      <th class="text-center" style="width:5%;">T</th>
                      <th class="text-center" style="width:5%;">I</th>
                      <th class="text-center" style="width:6%;">V</th>
                    </tr>
                    </thead>
                    <tbody id="tabla">
                    </tbody>
                    <tfoot class="bg-warning">
                    <tr><td colspan="6"> </td></tr>
                    <tr><td colspan="6"> </td></tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (right) -->
</div>
<!-- /.row -->
<script>
  var input=  document.getElementById('perspectiva');
  input.addEventListener('input',function(){
    if (this.value.length > 2)
      this.value = this.value.slice(0,2);
  })
</script>
<script>
  var input=  document.getElementById('fila');
  input.addEventListener('input',function(){
    if (this.value.length > 2)
      this.value = this.value.slice(0,2);
  })
</script>
<?php
require_once("footer.php");
?>
