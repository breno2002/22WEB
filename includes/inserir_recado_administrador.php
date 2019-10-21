<?php

if (isset($_POST['mandar'])) {

 

  if(isset($_POST['select_destinatario'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['tipo'];
    $cpf_dest = $_POST['select_destinatario'];
    $remetente = $_SESSION['cd_usuario'];
    $periodo = $_POST['periodo'];

    if ($periodo == 1) {
      $sql_m = 'select * from tb_aluno inner join tb_aluno_responsavel on(tb_aluno.cd_aluno = tb_aluno_responsavel.id_aluno) where id_turma = '.$periodo.' ';

      if ($query_m = $mysqli->query($sql_m)) {
          
      }
    }


    $c=0;

    if ($cpf_dest == "todos") {

      $sql_todos = 'select * from tb_responsavel';

      $query_todos = $mysqli->query($sql_todos);

      while ($row_todos = $query_todos->fetch_array()){
  
        $a[$c++] = $mysqli->query('insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_todos['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")');

          echo '<meta http-equiv="refresh" content="0.1">';
      }

      
    }
        
        $sql_dest_resp = 'select * from tb_responsavel where ds_cpf_responsavel = "'.$cpf_dest.'"';
        $query_dest_resp = $mysqli->query($sql_dest_resp);

        $row_resp = $query_dest_resp->fetch_array();

        $sql_recado_resp = 'insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_resp['cd_responsavel'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")';

        if (!$query_recado_resp = $mysqli->query($sql_recado_resp)){
                        
         echo "Error%s/n", $mysqli -> error;

      }

      else{
        echo '<meta http-equiv="refresh" content="0.1">';
      }
  }

    }


     
 

?>