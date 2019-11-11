<!DOCTYPE html>
<html lang="en">

<?php
date_default_timezone_set("Brazil/East");
include('../conexao.php');
session_start();

  ?>

<meta charset="utf-8">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>22 WEB | Admin </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
          
          <center><a href="#"><img src="images/logo.png" class="brand-logo" height="50"></a>
          <a href="#"><img src="images/titulo.png" class="img-fluid menu-header"></a></center>
      

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Busque por..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link" href="#" id="userDropdown" role="button">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->

    <ul class="sidebar navbar-nav">
      
        <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home"></i>
          <span>Início</span>
        </a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="novo.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Novo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="redigir.php">
          <i class="fas fa-fw fa-share-square"></i>
          <span>Redigir</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chat.php">
          <i class="fas fa-fw fa-comments"></i>
          <span>Chat</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="formulario.php">
          <i class="fas fa-fw fa-id-card"></i>
          <span>Formulário</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registros.php">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Registros</span></a>
      </li>
      <form method="post">
      
      <li class="nav-item">

          <a class="nav-link" href="">
          <i class="fas fa-fw fa-power-off"></i>
          <span><button type='submit' name='desligar' style="background: none; text-decoration: none; border: none; color: rgba(255, 255, 255, 0.5);">Sair</button></span></a>
      </li>
      </form>

      <?php 

      if (isset($_POST['desligar'])) {
        session_destroy();    
        header('location:../login.php'); 
      }

      ?>
    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

              <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Formulário</a>
          </li>
          <a href="formulario.php?id=2"><li class="breadcrumb-item active"> /Cadastrar novo Responsável e Aluno/</li></a>
          <a href="formulario.php?id=3"><li class="breadcrumb-item active"> Cadastrar novo Professor</li></a>
            <a href="formulario.php?id=4"><li class="breadcrumb-item active"> /Cadastrar novo Administrador</li></a>
        </ol>

        

        <?php 


        if (empty($_GET['id'])) {
          echo '<form method="post" enctype="multipart/form-data"><h1>Responsável</h1>';
            include('../includes/modal/include_modal_responsavel.php');
            echo '<h1>Aluno</h1>';
            include('../includes/modal/include_modal_aluno.php');
            echo '</form>';
            include('../includes/admin/cadastrar_responsavel.php');
        }

        if (isset($_GET['id'])){

          if ($_GET['id'] == 2) {

            echo '<form method="post" enctype="multipart/form-data"><h1>Responsável</h1>';
            echo '<h1>Responsável</h1>';
            include('../includes/modal/include_modal_responsavel.php');
            echo '<h1>Aluno</h1>';
            include('../includes/modal/include_modal_aluno.php');
            echo '</form>';
            include('../includes/admin/cadastrar_responsavel.php');

          }

          if ($_GET['id'] == 3) {

            echo '<form method="post" enctype="multipart/form-data"><h1>Responsável</h1>';
            echo '<h1>Professor</h1>';
            include('../includes/modal/include_modal_professor.php');
            echo '</form>';
            include('../includes/admin/cadastrar_professor.php');
          }

          if ($_GET['id'] == 4) {

            echo '<form method="post" enctype="multipart/form-data"><h1>Responsável</h1>';
            echo '<h1>Administrador</h1>';
            include('../includes/modal/include_modal_administrador.php');
            echo '</form>';
            include('../includes/admin/cadastrar_administrador.php');
          }

        }
        
        

        ?>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>-->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <?php 

  ?>

</body>

</html>
