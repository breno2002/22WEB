<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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

  include('../includes/inserir_recado_administrador.php');
  include('../includes/modal/modal_sair.php');

  ?>

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
        <a class="nav-link" href="index.html">
          <i class="fas fa-home"></i>
          <span>Início</span>
        </a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="novo.html">
          <i class="fas fa-fw fa-edit"></i>
          <span>Novo</span>
        </a>
      </li>
      <li class="nav-item active">
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
header('location:../login.php');       }

      ?>
    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Redigir</a>
          </li>
          <li class="breadcrumb-item active">Emitir novo recado em massa</li>
        </ol>

        <div class="row">
                    <div class="col">

                <form method="POST">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1"><b style="color: grey;">Tipo de recado</b></label>


                  <br>

                    <?php include '../includes/select_tipoderecado.php'; ?>

                    <br><br>


                      <select class="form-control" style="background: white; border: 1px grey solid; border-radius:3%;" name="select_destinatario">
                        <option>Selecione o destino do recado...</option>
                        <option value="manha">Turmas da manhã</option>
                        <option value="tarde">Turmas da tarde</option>
                        <option value="todos">Todas as turmas</option>
                      </select><br>


                <label for="exampleFormControlTextarea1"><b style="color: grey;">Conteúdo do recado</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  rows="4" style="background: white; border: 1px grey solid; border-radius:3%;" name="recado"></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-lg btn-block" name="mandar">Enviar</button><br>
                </form>

                <div class="row" style="border: solid 1px #cacaca; font-style: italic; height: 200px; padding: 10px; background-color: #eee;">
                  <p> Clique em um <i class="fas fa-eye"></i> para visualizar um dos recados enviados. </p>
                </div>
        </div>

          <div class="col">
            <div style="overflow:scroll;height:500px;width:100%;overflow:auto">
            <table class="table table-condensed table-hover">
                <tbody>
                  <?php 

         include ('../includes/select_recados_administrador.php');
          ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>

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

<?php 

  if (isset($_POST['mandar'])) {

 

  if(isset($_POST['periodo'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['tipo'];
    $cpf_dest = $_POST['periodo'];
    $remetente = $_SESSION['cd_usuario'];  
    $c=0;

    if ($cpf_dest == "todos") {

      $sql_todos = 'select * from tb_responsavel';

      $query_todos = $mysqli->query($sql_todos);

      while ($row_todos = $query_todos->fetch_array()){
  
        $a = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_todos['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")');

         echo $a[$c];

      }

      
    }

    if ($cpf_dest == "m") {

      $sql_manha = 'select * from tb_aluno where id_turma < 9';
      $query_manha = $mysqli->query($sql_manha);

      while ($row_manha = $query_manha->fetch_array()){
  
        $a_manha = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_manha['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")');
         echo $a_manha[$c];

      }

      
    }

    if ($cpf_dest == "t") {

      $sql_tarde = 'select * from tb_aluno where id_turma > 9';
      $query_tarde = $mysqli->query($sql_tarde);

      while ($row_tarde = $query_tarde->fetch_array()){
  
        $sql_p_t = 'select * from tb_aluno_responsavel inner join tb_responsavel on(tb_responsavel.cd_responsavel = tb_aluno_responsavel.id_usuario_responsavel) where id_aluno = '.$row_tarde['cd_aluno'].' ';

        $query_p_t = $mysqli->query($sql_p_t);
        $r_p_t = $query_p_t->fetch_array();

        $a_tarde = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$a_tarde['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")');

        echo $a_tarde[$c];

      }

      
    }
  }

    }

?>

</html>
