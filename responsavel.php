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

  if ($_SESSION['chave']==2) {
    header('location:professor.php');
  }
   
}
}

else{
  header('location:login.php');
}

  ?>
  <title>22WEB| Área do responsável</title>
</head>
<body>  

<form method="post" multipart='enctype/form-data'>
  <div class="row">
    
    <div class="col s5 m4 l3" id='menu'>
      <ul>
        <p>
          <h4>Responsável</h4>
           <li><a href='chat_resp.php'>chat</a></li>
           <li><a href='#modal_sair' class="modal-trigger">deslogar</a></li>
        </p>
      </ul>
    </div>

    <style type="text/css">
      #menu{
        background: black;
        text-decoration-color: white;
        height: 200px;
      }

      #menu, a{
        color: white;
      }

      #radio{
        height: 40px;
      }

</style>
   
    <div class="col s4 m5 l6" id='recados'>

      <ul>

      <p>

          <?php 

          include('includes/select_recados_responsavel.php');

          ?>
      </p>

      <p>
      <textarea name="recado" id='txt'></textarea>
      </p>
    </ul>

    </div>

    <div class="col s2 m2 l1">
    <select name='select_tipo' id='tipo'>

      <option>Tipo</option>
        <?php
        $sql_recado = 'select * from tb_tipo_recado';

        if ($query_recado = $mysqli->query($sql_recado)) {
          while ($row_recado = $query_recado->fetch_array()) {

            if ($row_recado['nm_tipo_recado'] == 'evento') {

            }

            else{
                echo utf8_encode('<option name="tipoderecado" value="'.$row_recado['cd_tipo_recado'].'">'.$row_recado['nm_tipo_recado'].'</option>'); 
              }

          }
        }

        
        ?>
    </select>
    </div>

    <div class="col s2 m2 l1">
    <select name='select_destinatario' id='dest'>
        <option>Destinatário</option>

        <?php
          include ('includes/select_destinatario_administrador.php');
        ?>
    </select>
    </div>

    <div class="col s2 m2 l1">
    <button class="btn btn-floating teal darken-4" id='send' name='mandar'>
      <i class="material-icons">send</i>
    </button>
    </div>

  </div>
  </form>

  <div class="row">
    <div class="col s8 m8 l7" id='a'>
      
    </div>
  </div>


  <script>
  
            $(document).ready(function(){

            $('select').formSelect();
            $('select2').formSelect();

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

  include('includes/inserir_recado_responsavel.php');
  include('includes/modal/modal_sair.php');

?>




