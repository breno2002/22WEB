<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">

  <?php 

session_start();
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  include('../includes/links.php');
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
  <title>22WEB| Local do Professor</title>
</head>
<body>  
  <div class="row">
    
    <div class="col s12 m12 l12" id='menu'>
      <ul>
        <p>
        <li>
        <a href="admin.php"><h1 style="color: white;">ADMIN - POST</h1></a>
         </li>
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

  </div>


  <div class="row" id='container'>


    <div class="col s4 m4 l4">

      <form method="post">

      <p>Título</p>
      <p><textarea placeholder="descrição da atividade..." id='txt' name="titulo_post"></textarea></p>

      <p>Descrição<input type="text" id='texto' name="desc_post" ></p>

      Categoria

        <select name='select_tipo' id='tipo'>

      <option>Tipo...</option>
        <?php 

          $sql_cat = 'select * from tb_categoria_post';
          $query_cat = $mysqli->query($sql_cat);

          while ($row_cat = $query_cat->fetch_array()) {
            echo '<option>'.$row_cat['nm_categoria_post'].'</option>';
          }

          ?>

       </select>

      <input type="submit" id='send2' name='mandar_post'>

      </form>



    </div>

  </div>



  <?php 



if (isset($_POST['mandar_post'])) {
  $sql_post = 'insert into tb_post values(null, '.$_POST['desc_post'].', '.date('d/m/y').', '.$_SESSION['cd_usuario'].', "'.$_POST['titulo_post'].'", null, '.$_POST['select_tipo'].')';

  $query_post = $mysqli->query($sql_post);
}

  


  ?>

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
    height: 100px;
    width: 100%;
  }

  #radio{
    height: 40px;
  }

  li{
    color: black;
    text-decoration: none;
  }

  a{
    text-decoration: none;
  }

  #cor{
    text-decoration: none;
    color: initial;
  }

#delete{
  color: black;
}

#mudar{
  color: black;
}

#professor{
  color: white;
}

#container{
  color: black;
}
</style>



<?php
  

?>




