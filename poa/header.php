<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>POA | Página Principal</title>
  <link rel="icon" href="img/icono.png">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=" sidebar-mini ">
<div class="wrapper bg-dark">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="background-color: #28a745;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars bg-white"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link text-white"> <strong>INICIO</strong></a>
      </li>
       
    </ul>

   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto  ">
      <li class="nav-item">
        <a class="btn btn-sn" data-toggle="modal" data-target="">Cerrar sesión</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4"  >
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link" style="background-color: #28a745;" >
      <img src="img/joint.png" alt="Plan Operativo Anual" class="brand-image"
           >
      <span class="brand-text text-white"> &nbsp; POA </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
           <h5>Ronny Rodriguez</h5>
        </div>        
        
      </div>
      <p>______________________________</p>

      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="empresa.php" class="nav-link">
              <i class="nav-icon fas fa-hotel" style=" color: #28a745;"></i>
              <p class="text-white">
                <strong>EMPRESA</strong>
              </p>
            </a>
          </li>
          <p>______________________________</p>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-gem" style=" color: #28a745;"></i>
              <p class="text-white">
                <strong>FODA</strong>
                <i class="fas fa-angle-left right" style="color:#28a745;"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="oportunidades.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-yellow "></i>
                  <p class="text-white">Oportunidades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="amenazas.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Amenazas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fortalezas.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Fortalezas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="debilidades.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Debilidades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="determinacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Determinación</p>
                </a>
              </li>
            </ul>
          </li>
          <p>______________________________</p>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-award" style=" color: #28a745;"></i>
              <p class="text-white">
                <strong>MATRIZ FODA</strong>
                <i class="fas fa-angle-left right" style="color:#28a745;"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="oportunidades.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-yellow "></i>
                  <p class="text-white">Ponderar Matriz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="amenazas.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Listado Matriz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fortalezas.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Gráfica Matriz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="debilidades.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Ordenamiento Matriz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="determinacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Vector Estratégico</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="determinacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-orange"></i>
                  <p>Orden Por Motricidad</p>
                </a>
              </li>
            </ul>
          </li>
          <p>______________________________</p>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-badge" style="color: #28a745;"></i>
              <p class="text-white">
                <strong>CUENTA</strong>
                <i class="fas fa-angle-left right" style="color:#28a745;"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="oportunidades.php" class="nav-link">
                  <i class="nav-icon fas fa-user-alt text-info"></i>
                  <p class="text-white">Perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="amenazas.php" class="nav-link">
                  <i class="nav-icon fas fa-user-edit text-danger"></i>
                  <p>Editar Perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="auth/index.php" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt text-success"></i>
                  <p>Salir</p>
                </a>
              </li>
            </ul>
          </li>
          <p>______________________________</p>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
