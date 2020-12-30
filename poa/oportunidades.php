<?php
$id= isset($_GET['id'])? $_GET['id']:'';
?>
<title>POA | Oportunidadea</title>
<?php
require_once("header.php");
?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">s
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
                <input type="hidden"  id="valor">
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->

          <div class="row">
            <form class="col-12" id="formOportunidadRegistro" method="post" onsubmit="return addOportunity(); ">
              <div class="card card-warning" id="tabla"></div>
              <div><input type="hidden" class="form-control" value="<?php echo $id;?>" name="id" id="id" required></div>

            </form>
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
<script src="js/dataOportunidades.js"></script>
<?php
require_once("footer.php");
?>
