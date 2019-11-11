<?php

if (isset($_POST['mandar'])) {

  if(isset($_POST['select_destinatario'])){
    
    $cpf_dest = $_POST['select_destinatario'];

    if ($cpf_dest == "todos") {

      $recado = $_POST['recado'];
      $tipoderecado = $_POST['tipo'];
      $remetente = $_SESSION['cd_usuario'];  
      $c=0;

      $sql_todos = 'select * from tb_responsavel';

      $query_todos = $mysqli->query($sql_todos);

      while ($row_todos = $query_todos->fetch_array()){
  
        $a[$c++] = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_todos['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")');

          echo '<meta http-equiv="refresh" content="0.1">';
      }

      
    }
        
        if ($cpf_dest == "tarde") {

          $recado_2 = $_POST['recado'];
          $tipoderecado_2 = $_POST['tipo'];
          $remetente_2 = $_SESSION['cd_usuario'];  
          $d=0;

          $sql_i = 'select * from tb_aluno inner join tb_aluno_responsavel on(tb_aluno.cd_aluno = tb_aluno_responsavel.id_aluno)';
          $query_i = $mysqli->query($sql_i);

          while ($row_i = $query_i->fetch_array()) {

            echo $row_i['id_turma'];
            echo 'oi';
            
            if ($row_i['id_turma'] >= 8) {
            

              $sql_tarde = 'select * from tb_responsavel';

                  $query_tarde = $mysqli->query($sql_tarde);

                  while ($row_tarde = $query_tarde->fetch_array()){
  
                    if (!$teste = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado_2.'", '.$remetente_2.', '.$row_tarde['cd_responsavel'].', '.$tipoderecado_2.', "'.date('d/m/y').' '.date('H:i:s').'" )')) {
                     echo 'erro';
                    }

                  }

            }

          }

      

      
    }

    if ($cpf_dest == "manha") {

          $recado_3 = $_POST['recado'];
          $tipoderecado_3 = $_POST['tipo'];
          $remetente_3 = $_SESSION['cd_usuario'];  
          $f=0;

          $sql_i_3 = 'select * from tb_aluno inner join tb_aluno_responsavel on(tb_aluno.cd_aluno = tb_aluno_responsavel.id_aluno)';
          $query_i_3 = $mysqli->query($sql_i_3);

          while ($row_i_3 = $query_i_3->fetch_array()) {

            echo $row_i['id_turma'];
            
            if ($row_i_3['id_turma'] <= 9) {

              $sql_manha = 'select * from tb_responsavel';

                  $query_manha = $mysqli->query($sql_manha);

                  while ($row_manha = $query_manha->fetch_array()){
  
                    $d[$f++] = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado_3.'", '.$remetente_3.', '.$row_manha['cd_responsavel'].', '.$tipoderecado_3.', "'.date('d/m/y').' '.date('H:i:s').'")');

                      echo '<meta http-equiv="refresh" content="0.1">';
                  }
              
            }

          }

      

      
    }

  }

    }


     
 

?>