<title>POA | Amenazas</title> 
<link rel="stylesheet" href="main.css">  
      
<link rel="stylesheet" href="main.css">  
      
      
<?php 
  require_once("header.php");
?>
<!--datables CSS básico-->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
      <!--datables estilo bootstrap 4 CSS-->  
      <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
             
      <!--font awesome con CDN-->  
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-dark">&nbsp;Empresa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Página Principal</a></li>
              <li class="breadcrumb-item active">Empresa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card text-dark">
              <div class="card-header bg-dark ">
                <h3 class="card-title">
                <i class="fas fa-hotel"></i>
                   &nbsp;  Añadir, Listar, Editar y Eliminar Empresa
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mt-3 mb-3">
                  <div class="col-sm-12">
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#addCompany"> 
                    <i class="fas fa-plus-circle"></i>
                     &nbsp; Añadir Empresa
                    </button>
                  </div>
                </div>
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Orden</th>
                    <th>Empresa</th>
                    <th>Giro de Negocio</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td >
                      <button class="btn btn-info" data-toggle="modal" data-target="#editCompany">
                      <i class="fas fa-edit"></i>
                      </button>
                      &nbsp;
                      <button class="btn btn-danger" data-toggle="modal" data-target="#delCompany">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td >
                    <button class="btn btn-info" data-toggle="modal" data-target="#editCompany">
                      <i class="fas fa-edit"></i>
                      </button>
                      &nbsp;
                      <button class="btn btn-danger" data-toggle="modal" data-target="#delCompany">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td >
                    <button class="btn btn-info" data-toggle="modal" data-target="#editCompany">
                      <i class="fas fa-edit"></i>
                      </button>
                      &nbsp;
                      <button class="btn btn-danger" data-toggle="modal" data-target="#delCompany">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                    <td >
                    <button class="btn btn-info" data-toggle="modal" data-target="#editCompany">
                      <i class="fas fa-edit"></i>
                      </button>
                      &nbsp;
                      <button class="btn btn-danger" data-toggle="modal" data-target="#delCompany">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                    <td >
                    <button class="btn btn-info" data-toggle="modal" data-target="#editCompany">
                      <i class="fas fa-edit"></i>
                      </button>
                      &nbsp;
                      <button class="btn btn-danger" data-toggle="modal" data-target="#delCompany">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
<?php 
require_once("footer.php");
require_once("modal/modalAdd.php");
require_once("modal/modalEdit.php");
require_once("modal/modalDelete.php");
?>

<!-- datatables JS -->
     <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
     <!-- para usar botones en datatables JS -->  
     <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
     <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
     <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
     <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
     <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
      
     <!-- código JS propìo-->    
     <script type="text/javascript" src="main.js"></script>

   
    
