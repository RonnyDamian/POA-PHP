<title>POA | Amenazas</title> 
<?php 
  require_once("header.php");
?>

 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Página Principal</a></li>
              <li class="breadcrumb-item active">Amenazas</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
              <i class="fas fa-table"></i> &nbsp;
                    <strong>GENERADOR DE TABLAS</strong> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body row mt-3">
                  <div class="col-md-4">
                    <label   class="text-dark"> N° DE PERSPECTIVAS</label>
                    <input type="number" min="1"  max="10" class="form-control" >
                  </div>
                  <div class="col-md-4">
                    <label class="text-dark" >N° DE FILAS POR PERSPECTIVA</label>
                    <input type="number" min="1"  max="10" class="form-control" >
                  </div>
                  <div class="col-md-4">
                      <button type="submit" class="btn btn-DANGER float-left" style="margin-top:32px">
                      <strong>Generar</strong> 
                      <i class="fas fa-arrow-circle-right"></i>
                      </button>  
                  </div>                   
                </div>
                <!-- /.card-body -->             
              </form>
            </div>
            <!-- /.card -->

            <div class="row">
          <div class="col-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-plus-circle"></i>
                  &nbsp;  <strong>AMENAZAS</strong>
                </h3>
 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-head-fixed text-dark">
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
                  <tbody>
                    <tr>
                      
                      <td ><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>                
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                     
                    </tr>
                    <tr>
                       
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                      
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                       
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                       
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                       
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                    <tr>
                      
                    <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><input type="text" value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." class="form-control"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                      <td><span class="tag tag-success"><input type="text" value="1" class="form-control text-center"></td>
                    </tr>
                  </tbody>
                    <tfoot class="bg-danger">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </di

<?php 
require_once("footer.php");
?>
