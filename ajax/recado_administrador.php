<?php
session_start();
include('conexao.php');

  if(isset($_POST['select_destinatario'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['select_tipo'];
    $cpf_dest = $_POST['select_destinatario'];
    $remetente = $_SESSION['cd_usuario'];  

    $sql_dest_prof = 'select * from tb_professor where ds_cpf_professor = '.$cpf_dest.'';
    
    $query_dest_prof = $mysqli->query($sql_dest_prof);

    if($query_dest_prof->num_rows > 0){
    $row_prof = $query_dest_prof->fetch_array();

    $sql_recado_prof = 'insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', null, '.$row_prof['cd_professor'].', '.$tipoderecado.')';

              echo '<meta http-equiv="refresh" content="0.1">';    

    if (!$query_recado_prof = $mysqli->query($sql_recado_prof)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
    }

    else{
        
        $sql_dest_resp = 'select * from tb_responsavel where ds_cpf_responsavel = '.$cpf_dest.'';
        $query_dest_resp = $mysqli->query($sql_dest_resp);

        $row_resp = $query_dest_resp->fetch_array();

        $sql_recado_resp = 'insert into tb_recado_canal_administrador values(null, "'.$recado.'", '.$remetente.', '.$row_resp['cd_responsavel'].', null, '.$tipoderecado.')';

              echo '<meta http-equiv="refresh" content="0.1">';

        if (!$query_recado_resp = $mysqli->query($sql_recado_resp)){
                        
         echo "Error%s/n", $mysqli -> error;

      }
  }

    }
      
                        
?>

