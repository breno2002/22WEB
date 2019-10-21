<?php
  
  session_start();
  include('conexao.php');
  
      $recado = $_POST['recado'];
      $cd_destinatario = $_POST['dest'];

      $sql_tipo_p = 'select * from tb_professor where ds_cpf_professor = $cd_destinatario';
      $sql_tipo_a = 'select * from tb_administrador where ds_cpf_administrador = $cd_destinatario';
      $sql_tipo_r = 'select * from tb_responsavel where ds_cpf_responsavel = $cd_destinatario';

      $query_tipo_p = $mysqli->query($sql_tipo_p);

      if ($query_tipo_p->num_rows>0) {
      	# code...
      }

      $query_tipo_a = $mysqli->query($sql_tipo_a);

      if ($query_tipo_a->num_rows>0) {
      	# code...
      }

      $query_tipo_r = $mysqli->query($sql_tipo_r);

      if ($query_tipo_r->num_rows>0) {
      	# code...
      }

      $sql_recado = 'insert into tb_mensagem_professor values(null, "'.$recado.'", "'.$_SESSION['cd_usuario'].'", "'.$cd_destinatario.'")';

      if (!$query_recado = $mysqli->query($sql_recado)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
     
  ?>