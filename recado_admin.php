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
  <title>22WEB| Local da Administração</title>
</head>
<body>  

<form method="post" multipart='enctype/form-data'>
  <div class="row">
    
    <div class="col s5 m4 l3" id='menu'>
      <ul>
        <p>
         <a href="admin.php"><h4>ADMIN</h4></a>
          <li><a href='#modal_aluno' class="modal-trigger">Cadastrar Aluno</a></li>
          <li><a href='#modal_responsavel' class="modal-trigger">Cadastrar Responsável</a></li>
          <li><a href='#modal_professor' class="modal-trigger">Cadastrar Professor</a></li>
           <li><a href='#modal_administrador' class="modal-trigger">Cadastrar Administrador</a></li>
           <li><a href='#' class="modal-trigger">Enviar recado</a></li>
           <li><a href='#modal_sair' class='modal-trigger'>deslogar</a></li>
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

         include ('includes/select_recados_administrador.php');
          ?>
      </p>

      <p>
      <textarea id='txt' name='recado'></textarea>
      </p>
    </ul>

    </div>

    <div class="col s2 m2 l1">
    <select name='select_tipo' id='tipo'>

      <option>Tipo...</option>
        <?php
          include('includes/select_tipoderecado.php');    
        ?>

    </select>
    </div>

     <div class="col s2 m2 l1">
    <select name='select_destinatario' id='dest'>
        <option>Destinatário</option>

        <?php
          include ('includes/select_destinatario_responsavel.php');
        ?>

        <option value='todos'>Em Massa</option>
    </select>
    </div>



    <div class="col s2 m2 l1">
    <button class="btn btn-floating teal darken-4" id='send' type="submit" name="mandar"></button>
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

            $("#send").click(function(){

              var dados = {'destinatario' : $('#dest').val(), 'tipo' : $('#tipo').val(), 'texto' : $('#txt').val()};

               $.ajax({
                type:'POST',
                url:'ajax/recado_administrador.php',
                data: dados,
               });

               
            });
          });

  </script>

<?php

  include('includes/inserir_recado_administrador.php');
  include('includes/modal/include_modal_professor.php');
  include('includes/modal/include_modal_aluno.php');
  include('includes/modal/include_modal_responsavel.php');
  include('includes/modal/include_modal_administrador.php');
  include('includes/admin/cadastrar_administrador.php');
  include('includes/admin/cadastrar_professor.php');
  include('includes/admin/cadastrar_responsavel.php');
  include('includes/admin/cadastrar_aluno.php');
  include('includes/modal/modal_sair.php');

?>  


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



