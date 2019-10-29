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

        if (isset($_GET['id'])) {
  $sql_atividade = 'select * from tb_atividade
inner join tb_materia on(tb_materia.cd_materia = tb_atividade.id_materia)
inner join tb_bimestre on(tb_bimestre.cd_bimestre = tb_atividade.id_bimestre)
inner join tb_turma on(tb_turma.cd_turma = tb_atividade.id_turma) where cd_materia = "'.$_SESSION['materia'].'" and cd_atividade = '.$_GET['id'].' ';

  $query_atividade = $mysqli->query($sql_atividade); 
while ($row_atividade = $query_atividade->fetch_array()) {

  $atividade = $row_atividade['nm_atividade'];
  $nome_materia = $row_atividade['nm_materia'];
  $bimestre = $row_atividade['nm_bimestre'];
  $turma = $row_atividade['ds_turma'];

  echo utf8_encode('<ul><li><b>Atividade de '.$nome_materia.'</b> Nome da atividade:'.$atividade.',  Bimestre: '.$bimestre.', Turma: '.$turma.'</li></ul>');
  echo '<a href="atividade.php?id='.$row_atividade['cd_atividade'].'" id="delete_atividade">deletar </a><a href="alterar.php?id='.$row_atividade['cd_atividade'].'" id="mudar_atividade">alterar</a>';
}
        }

        ?>

    </ol>
    </div>

    <div class="col s3 m3 l3">

      <form method="post">

      <p>Descrição da atividade</p>
      <p><textarea placeholder="descrição da atividade..." id='txt' name="txt"></textarea></p>

      <p>Nome da nota<input type="text" id='nome' maxlength="40" name="nome"></p>

      <p>Peso<input type="number" id='peso' maxlength="1" name="peso"></p>

      <p>Bimestre<select id='bimestre' name="bimestre">
        <?php 

        $sql_bim = 'select * from tb_bimestre';

        $query_bim = $mysqli->query($sql_bim);

        while ($row_bim = $query_bim -> fetch_array()) {
          echo utf8_encode('<option value= '.$row_bim['cd_bimestre'].' >'.$row_bim['nm_bimestre'].'</option>');
        }

        ?>
      </select></p>

      <p>Turma<select id='turma' name="turma">
        <?php 

        $sql_turma = 'select * from tb_turma';

        $query_turma = $mysqli->query($sql_turma);

        while ($row_turma = $query_turma -> fetch_array()) {
          echo utf8_encode('<option value= '.$row_turma['cd_turma'].' >'.$row_turma['ds_turma'].'</option>');
        }

        ?>
      </select>
      </p>

      <input type="submit" id='send2' name='mandar_nota'>

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
  
  include('includes/alterar_nota.php');
  

?>




