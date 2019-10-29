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

  <div class="row">
    
    <div class="col s5 m4 l3" id='menu'>
      <p>
        <a href="nota.php">Menções</a>
        <a href="chat.php">Chat</a>
      </p>
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
        <div class="col s5 m5 l5"><?php 

        include('includes/select_foto_aluno.php')

        ?>
          
        </div>

        <div class="col s3 m3 l3"><?php 

        include('includes/select_inform_aluno.php');

        ?>
          
        </div>

      </div>

    <div class="row">
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




