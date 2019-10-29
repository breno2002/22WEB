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
    
    if($_SESSION['chave']==2){
    }
   
}
}

else{
  header('location:login.php');
}

  ?>
  <title>22WEB| Local da Administração</title>
</head>
<body>  

<form method="post" multipart='enctype/form-data'>
  <div class="row">
    
    <div class="col s5 m4 l3" id='menu'>
      <ul>
        <p>
          <?php 

         $sql_mat= 'select * from tb_materia where cd_materia = '.$_SESSION['materia'].';'; 

            $query_nome_mat = $mysqli->query($sql_mat);

            while ($row_mat = $query_nome_mat->fetch_array()) {
              echo utf8_encode('<li><h4>Professor de '.$row_mat['nm_materia'].'</h4></li>');           
            }


          ?>
           <li><a href='#modal_sair' class="modal-trigger">deslogar</a></li>
           <li><a href='login.php'>Voltar</a></li>
        </p>
      </ul>
    </div>

    <style type="text/css">
      #menu{
        background: black;
        text-decoration-color: white;
        height: 500%;
      }

      #menu, a{
        color: white;
      }
    </style>

   
    <div class="col s4 m5 l6" id='recados'>

      <ul>

      <p>

          <?php 

         include('includes/select_mensagens_professor.php');

          ?>
      </p>

      <p>
      <textarea name="recado" id='txt'></textarea>
      </p>
    </ul>

    </div>
    
     <div class="col s4 m4 l2">
    <select name='select_destinatario' id='dest'>
        <option>Destinatário</option>

        <?php
          include ('includes/select_destinatario_administrador.php');
          include ('includes/select_destinatario_responsavel.php');
        ?>
    </select>
    </div>

    <div class="col s2 m2 l1">
    <button class="btn btn-floating teal darken-4" id='send'>
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

            $('.modal, #modal_aluno').modal();
            $('.modal, #modal_responsavel').modal();
            $('.modal, #modal_professor').modal();
             // Show sideNav
                   $('.button-collapse').sideNav('show');
          });

  </script>

</body>
</html>

<style type="text/css">
  #menu{
    height: 200px;
  }

  #radio{
    height: 40px;
  }
</style>

<script type="text/javascript">

   $(document).ready(function(){

    $("#send").click(function(){

          $.ajax({
        method: "POST",
        url: "ajax/chat.php",
        data: { 'recado' : $('#txt').val(), 'dest' : $('#dest').val()}
       });
  });

  });

</script>

<?php
  include('includes/modal/modal_sair.php');
  include('includes/inserir_mensagem_professor.php');

?>




