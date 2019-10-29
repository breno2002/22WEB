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
    
    <div class="col s12 m12 l12" id='menu'>
      <ul>
        <p>
        <li>
          <?php
        $sql_mat= 'select * from tb_materia where cd_materia = '.$_SESSION['materia'].';'; 

           $query_nome_mat = $mysqli->query($sql_mat);

           while ($row_mat = $query_nome_mat->fetch_array()) {
             echo utf8_encode('<h4 id="professor">Professor de '.$row_mat['nm_materia'].'</h4>');           
           }
        ?>
           <a href="professor.php">Inicial
           <a href='chat.php'>Chat</a>
           <a href='nota.php'>Atribuir menções</a>
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


  <div class="row">
    <div class="col s9 m9 l9">

      <ol>
      
        <?php 

        include('includes/select_inform_professor.php');

        ?>

    </ol>
    </div>

    <div class="col s3 m3 l3">

      <form method="post" name="mudar_dados">

      <p>MUDAR DADOS</p>
    
      <p>Nome
        <input type="text" name="nome_professor">
      </p>

      <select name="ativo">

        <option>Atividade</option>

        <option value="1">Ativo</option>
        <option value="0">Inativo</option>

      </select>

      <input type="submit" id='send2' name='mandar_alt'>

      </form>

      <form method="post" name='add_email'>

      <p>ADICIONAR INFORMAÇÕES</p>
    
      <p>email
        <input type="text" name="email_professor" placeholder="email">
      </p>

      <p>contato
        <input type="text" name="ddd" placeholder="ddd">
        <input type="text" name="contato_professor" placeholder="contato">
      </p>

      <p>endereço
        <input type="text" name="bairro_professor" placeholder="bairro">
        <input type="text" name="cidade_professor" placeholder="cidade">
        <input type="text" name="complemento_professor" placeholder="complemento">
      </p>

      <input type="submit" id='send2' name='add'>

      </form>



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
</style>

<script type="text/javascript">

</script>

<?php
  
  include('includes/alterar_dados_prof.php');
    include('includes/add_info_professor.php');

  

?>




