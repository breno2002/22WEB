<!DOCTYPE html>
<html lang="en">

<?php 

session_start();
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  include('../conexao.php');

   if (isset($_SESSION['login'])) {
  if ($_SESSION['login']==1) {

   if ($_SESSION['chave']==2) {
    header('location:professor.php');
  }

  if ($_SESSION['chave']==3) {
    header('location:responsavel.php');
  }
   
}
}

else{
  header('location:login.php');
}
  ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>22 WEB | Admin </title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <input type="text" class="form-control search" placeholder="Busque por..." aria-label="Search" aria-describedby="basic-addon2">
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
        <a class="nav-link" href="index.html">
          <i class="fas fa-home"></i>
          <span>Início</span>
        </a>
        </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
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
      <li class="nav-item">
        <a class="nav-link" href="calendario.php">
          <i class="fas fa-fw fa-calendar-day"></i>
          <span>Calendário</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulario.php">
          <i class="fas fa-fw fa-id-card"></i>
          <span>Formulário</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registros.php">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Registros</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Sair</span></a>
      </li>
    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Novo</a>
          </li>
          <li class="breadcrumb-item active">Nova publicação do blog</li>
        </ol>

              <form method="post" enctype='multipart/form-data'>
        

        <div class="input-group">
          <div class="input-group-prepend">
            <i class="fas fa-images icons"></i>
          </div>
          <div class="custom-file">
            <input type="file" name="foto_post" class="custom-file-input" id="inputGroupFile01"
              aria-describedby="inputGroupFileAddon01" name='foto_post' style="background: initial; border: 0.5px solid;">
            <label class="custom-file-label" for="inputGroupFile01"><i>Selecione uma imagem para a capa do post...</i></label>
          </div>
        </div>

        <br><div class="input-group">
          <div class="input-group-prepend">
            <i class="fas fa-info-circle icons"></i>
          </div>
          <select name="select_tipo" style="background: initial; border: 0.5px solid;" class="form-control input" id="exampleFormControlSelect1">
            <option>Selecione a categoria da publicação</option>

            <?php 

          $sql_cat = 'select * from tb_categoria_post';
          $query_cat = $mysqli->query($sql_cat);

          while ($row_cat = $query_cat->fetch_array()) {
            echo '<option value= "'.$row_cat['cd_categoria_post'].'">'.$row_cat['nm_categoria_post'].'</option>';
          }

          ?>

          </select>
        </div>

        <br><div class="input-group">
          <div class="input-group-prepend">
            <i class="fas fa-edit icons"></i>
          </div>
          <div class="custom-file">
            <input class="form-control input" id="email" name="titulo_post" style="background: initial; border: 0.5px solid;" type="text" placeholder="Título do post" />
          </div>
        </div>

          <br><div class="form-group">
          <label for="exampleFormControlTextarea1"><b style="color: grey;">Conteúdo da publicação</b></label>
          <textarea style="background: initial; border: 0.5px solid;" name='desc_post' class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>

        <button type="submit" name="mandar_post" class="btn btn-primary btn-lg btn-block">Adicionar</button>
      


      </form>
        

      
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">

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

  <!-- Logout Modal
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

  <?php 

  if (isset($_POST['mandar_post'])) {

      $nome = $_POST['titulo_post'];
      $extensao = strtolower(substr($_FILES['foto_post']['name'],-4)); //Pegando extensão do arquivo
      $nome_arquivo = $nome.$extensao; //Definindo um novo nome para o arquivo
      $pasta = '../fotos/post/'; //Diretório para uploads

        move_uploaded_file($_FILES['foto_post']['tmp_name'], $pasta.$nome_arquivo); //Fazer upload do arquivo
        $foto = $pasta.$nome_arquivo;

        $sql_post = 'insert into tb_post values(null, "'.$_POST['desc_post'].'", "'.date('d/m/y').'", '.$_SESSION['cd_usuario'].', "'.$_POST['titulo_post'].'", "'.$foto.'", '.$_POST['select_tipo'].')';

        if($query_post = $mysqli->query($sql_post)){}

    else{
       echo "Error%s/n", $mysqli -> error;
    }
}

  ?>

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

</body>

</html>
