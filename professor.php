<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">

  <?php 

  session_start();
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  include('includes/links.php');
  include('conexao.php');

   if (isset($_SESSION['login'])) {
  if ($_SESSION['login']==1) {

  if ($_SESSION['chave']==1) {
    header('location:admin.php');
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
  <title>22WEB| Local do Professor</title>
</head>
<body>  

<form method="post" multipart='enctype/form-data'>
  <div class="row">
    
    <div class="col s12 m12 l12" id='menu'>
      <p>
        <?php
        $sql_mat= 'select * from tb_materia where cd_materia = '.$_SESSION['materia'].';'; 

           $query_nome_mat = $mysqli->query($sql_mat);

           while ($row_mat = $query_nome_mat->fetch_array()) {
             echo utf8_encode('<h4>Professor de '.$row_mat['nm_materia'].'</h4>');           
           }
        ?>
        <a href="nota.php">Menções</a>
        <a href="chat_professor.php">Chat</a>
        <a href="#modal_sair" class="modal-trigger">Deslogar</a>
      </p>
    </div>
  </div>

    <style type="text/css">
      #menu{
        background: black;
        text-decoration-color: white;
        height: 100px;
         width: 100%;

      }

      #menu, a{
        color: white;
      }

      #radio{
        height: 40px;
      }

      li{
          list-style: none;
      }

      #alterar{
        text-decoration: none;
        color: black;
      }

</style>
   
  
      <div class="row">

        <div class="col s3 m3 l3">
          
          <?php
          include('includes/select_foto_professor.php');
          ?>

        </div>

        <div class="col s7 m7 l7"><?php 

        include('includes/select_inform_professor.php');

        ?>
          
        </div>

      </div>

    <div class="row">

  </div>
  </form>

  <div class="row">
    <div class="col s8 m8 l7" id='a'>
      
    </div>
  </div>


  <script>
  
            $(document).ready(function(){

            $('select').formSelect();

            $('.modal, #modal_aluno').modal();
            $('.modal, #modal_responsavel').modal();
            $('.modal, #modal_professor').modal();
             // Show sideNav
            $('.button-collapse').sideNav('show');
          });

  </script>

</body>
</html>



<script type="text/javascript">

   $(document).ready(function(){

    $("#send").click(function(){

              var dados = {'destinatario' : $('#dest').val(), 'tipo' : $('#tipo').val(), 'recado' : $('#txt').val()};

               $.ajax({
                type:'POST',
                url:'ajax/recado.php',
                data: dados,
               });
               
            });

  });

   

</script>

<?php
  include('includes/modal/modal_sair.php');

?>




