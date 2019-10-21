<?php

if (isset($_POST['recado'])) {
  if (isset($_POST['select_destinatario'])) {

    $recado = $_POST['recado'];
    $cd_destinatario = $_POST['select_destinatario'];
    $remetente = $_SESSION['cd_usuario']; 

      $sql_tipo_p = 'select * from tb_professor where ds_cpf_professor = "'.$cd_destinatario.'";';
      $sql_tipo_a = 'select * from tb_administrador where ds_cpf_administrador = "'.$cd_destinatario.'";';
      $sql_tipo_r = 'select * from tb_responsavel where ds_cpf_responsavel = "'.$cd_destinatario.'";';

      $query_tipo_p = $mysqli->query($sql_tipo_p);

      if ($query_tipo_p->num_rows>0) {

        $row_p = $query_tipo_p->fetch_array();

        $sql_recado_p = 'insert into tb_mensagem_professor values(null, "'.$recado.'", "'.$_SESSION['cd_usuario'].'", "'.$row_p['cd_professor'].', null, null, '.date('d/m/y').', '.date('H:i:s').'")';

      if (!$query_recado_p = $mysqli->query($sql_recado_p)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
      else{
        echo '<meta http-equiv="refresh" content="0.1">'; 

      }
      }

      $query_tipo_a = $mysqli->query($sql_tipo_a);

      if ($query_tipo_a->num_rows>0) {

         $row_a = $query_tipo_a->fetch_array();

         $sql_recado_a = 'insert into tb_mensagem_professor values(null, "'.$recado.'", '.$_SESSION['cd_usuario'].', null, null, '.$row_a['cd_administrador'].', "'.date('d/m/y').'", "'.date('H:i:s').'")';

      if (!$query_recado_a = $mysqli->query($sql_recado_a)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
      else{
        echo '<meta http-equiv="refresh" content="0.1">'; 

      }      

    }

      $query_tipo_r = $mysqli->query($sql_tipo_r);

      if ($query_tipo_r->num_rows>0) {
       $row_r = $query_tipo_r->fetch_array();

       
        $sql_recado_r = 'insert into tb_mensagem_professor values(null, "'.$recado.'", '.$_SESSION['cd_usuario'].', null, '.$row_r['cd_responsavel'].', null, "'.date('d/m/y').'", "'.date('H:i:s').'")';

      if (!$query_recado_r = $mysqli->query($sql_recado_r)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
      else{
        echo '<meta http-equiv="refresh" content="0.1">'; 

      }

      }
    
  }
}

    

      
     
  ?>     
