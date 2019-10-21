<?php
session_start();
include('../conexao.php');

  if(isset($_POST['select_destinatario'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['select_tipo'];
    $cpf_dest = $_POST['select_destinatario'];
    $remetente = $_SESSION['cd_usuario'];  

    $sql_dest_prof = 'select * from tb_professor where ds_cpf_professor = '.$cpf_dest.'';
    
    $query_dest_prof = $mysqli->query($sql_dest_prof);

    if($query_dest_prof->num_rows > 0){
    $row_prof = $query_dest_prof->fetch_array();

    $sql_recado_prof = 'insert into tb_recado_canal_responsavel values(null, "'.$recado.'", '.$remetente.', null, '.$row_prof['cd_professor'].', '.$tipoderecado.')';

              echo '<meta http-equiv="refresh" content="0.1">';    

    if (!$query_recado_prof = $mysqli->query($sql_recado_prof)){
                        
         echo "Error%s/n", $mysqli -> error;
      }
    }

    else{
        $sql_dest_adm = 'select * from tb_administrador where ds_cpf_administrador = '.$cpf_dest.'';

        echo $sql_dest_adm;
        
        $query_dest_adm = $mysqli->query($sql_dest_adm);

        if($query_dest_adm->num_rows > 0){
        $row_prof = $query_dest_adm->fetch_array();

        $sql_recado_adm = 'insert into tb_recado_canal_responsavel values(null, "'.$recado.'", '.$remetente.', null, '.$row_prof['cd_administrador'].', '.$tipoderecado.')';

                  echo $sql_recado_adm;    

        if (!$query_recado_adm = $mysqli->query($sql_recado_adm)){
                            
             echo "Error%s/n", $mysqli -> error;
             echo $sql_recado_adm;
      }
  }

    }

  }
                        
?>

