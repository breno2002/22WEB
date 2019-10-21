<?php
session_start();
include('../conexao.php');

  if(isset($_POST['select_destinatario'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['select_tipo'];
    $cpf_dest = $_POST['select_destinatario'];
    $remetente = $_SESSION['cd_usuario'];  

    $sql_dest_adm = 'select * from tb_administrador where ds_cpf_administrador = '.$cpf_dest.'';

    echo $sql_dest_adm;
    
    $query_dest_adm = $mysqli->query($sql_dest_adm);

    if($query_dest_adm->num_rows > 0){
    $row_prof = $query_dest_adm->fetch_array();

    $sql_recado_adm = 'insert into tb_recado_canal_professor values(null, "'.$recado.'", '.$remetente.', null, '.$row_prof['cd_administrador'].', '.$tipoderecado.')';

              echo $sql_recado_adm;    

    if (!$query_recado_adm = $mysqli->query($sql_recado_adm)){
                        
         echo "Error%s/n", $mysqli -> error;
         echo $sql_recado_adm;
      }
    }

    else{
        
        $sql_dest_resp = 'select * from tb_responsavel where ds_cpf_responsavel = '.$cpf_dest.'';
        $query_dest_resp = $mysqli->query($sql_dest_resp);

        echo $sql_dest_resp;

        $row_resp = $query_dest_resp->fetch_array();

        $sql_recado_resp = 'insert into tb_recado_canal_professor values(null, "'.$recado.'", '.$remetente.', '.$row_resp['cd_responsavel'].', null, '.$tipoderecado.')';

              echo $sql_recado_resp;

        if (!$query_recado_resp = $mysqli->query($sql_recado_resp)){
                        
         echo "Error%s/n", $mysqli -> error;

      }
  }

    }
                        
?>

