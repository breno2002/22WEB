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
              echo utf8_encode('<a href = "#"><h4>Professor de '.$row_mat['nm_materia'].'</h4></a>');          
            }
        ?>
        </li>
        <li>
           <a href="professor.php">Inicial
           <a href='chat_professor.php'>Chat</a>
           <a href='nota.php'>Atribuir menções</a>
           <a href='#modal_sair' class="modal-trigger">deslogar</a>
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
        <form method="post">
    <select name='turma'>
        <?php 

          $sql_select = 'select * from tb_turma';
          $query_select = $mysqli->query($sql_select);

          while ($row_select = $query_select->fetch_array()) {
            echo utf8_encode("<option value=".$row_select['cd_turma'].">".$row_select['ds_turma']."</option>");
          }

        ?>
      </select>

      <input type="submit">
      </form>
  </div>


  <div class="row">
    <div class="col s9 m9 l9">

      <ol>
      
        <?php 
        if (isset($_POST['turma'])) {

          $sql_alunos = 'select * from tb_aluno 
      left join tb_nota on(tb_nota.id_aluno = tb_aluno.cd_aluno) where id_turma= '.$_POST['turma'].' group by nm_aluno  ';

      $consulta_aluno = $mysqli -> query($sql_alunos);
        
      while ($row_aluno = $consulta_aluno->fetch_array()) {
        
          echo utf8_encode('<a href="aluno.php?id='.$row_aluno['cd_aluno'].'" id="cor"><li>'.$row_aluno['nm_aluno'].'</a>') ;

        $sql_notas = 'select * from tb_nota inner join tb_atividade on(tb_atividade.cd_atividade = tb_nota.id_atividade) inner join tb_materia on(tb_materia.cd_materia = tb_atividade.id_materia) where cd_materia = "'.$_SESSION['materia'].'" ';

        $query_notas = $mysqli->query($sql_notas);

        while ($row_nota = $query_notas->fetch_array()) {
         echo utf8_encode('<div id="col s2"><b>Nome da atividade:</b>'.$row_nota['nm_atividade']. ' Menção:' .$row_nota['vl_nota']. ' Bimestre: '.$row_nota['id_bimestre'].'º Bimestre');
         echo '   <a href="nota.php?id='.$row_nota['cd_nota'].'" id="delete">deletar</a>      <a href="alterar.php?id='.$row_nota['cd_nota'].'" id="mudar">alterar</a></div>';
         }
        
        }
        }

        else{

        include('includes/select_aluno_nota.php');
        
        }

        ?>

    </ol>
    </div>


      

    <div class="col s3 m3 l3">

      

      <form method="post">


      
        <?php

        if (isset($_POST['turma'])) {
          $sql_atividade = 'select * from tb_atividade inner join tb_materia on(tb_materia.cd_materia = tb_atividade.id_materia) inner join tb_turma on(tb_turma.cd_turma = tb_atividade.id_turma) where cd_materia = '.$_SESSION['materia'].' and cd_turma = '.$_POST['turma'].' ';

          echo '<p>Atividade<select name="atividade">';

          echo '<option value="0">Selecione uma atividade...</option>';

        $query_atividade = $mysqli->query($sql_atividade);

        while ($row_atividade = $query_atividade -> fetch_array()) {
          echo utf8_encode('<option value= '.$row_atividade['cd_atividade'].' >'.$row_atividade['nm_atividade'].'</option>');
        }

        echo "</select> </p>";
      }

      echo "<a href='atividade.php' id='add'> ADD </a>";

        ?>

        
      

      <p>Aluno<select id='aluno' name='aluno'>
        <?php 

        if (isset($_POST['turma'])) {

        echo '<option value= "0">Selecione um aluno...</option>';

      $sql_alunos = 'select * from tb_aluno where id_turma = '.$_POST['turma'].' ';

      $consulta_aluno = $mysqli -> query($sql_alunos);

      while ($row_aluno = $consulta_aluno->fetch_array()) {
        echo utf8_encode('<option value="'.$row_aluno['cd_aluno'].'">'.$row_aluno['nm_aluno'].'</option>');
      }
    }

        

      ?>
      </select>

      <p>Nota do aluno<input type="number" id='nota' name="nota" ></p>

      <input type="submit" id='send2' name='mandar_nota'>

      </form>
    </p>



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
    color: red;
  }

  #mudar{
    color: green;
  }

</style>

<script type="text/javascript">

</script>

<?php
  
  include('delete_nota.php');
  include('includes/modal/modal_sair.php');
  include('includes/cadastrar_nota.php');

?>




