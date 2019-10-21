<?php

if (isset($_POST['mandar'])) {

  if(isset($_POST['select_destinatario'])){
    $recado = $_POST['recado'];
    $tipoderecado = $_POST['select_tipo'];
    $cpf_dest = $_POST['select_destinatario'];

    

    $remetente = $_SESSION['cd_usuario'];  

        $sql_dest_adm = 'select * from tb_administrador where ds_cpf_administrador = "'.$cpf_dest.'"';
        
        $query_dest_adm = $mysqli->query($sql_dest_adm);

        if($query_dest_adm->num_rows > 0){
        $row = $query_dest_adm->fetch_array();

        $sql_recado_adm = 'insert into tb_recado_canal_responsavel values(null, "'.$recado.'", '.$remetente.', '.$row['cd_administrador'].', '.$tipoderecado.', "'.date('d/m/y').' '.date('H:i:s').'")';
   

        if (!$query_recado_adm = $mysqli->query($sql_recado_adm)){
                            
             echo "Error%s/n", $mysqli -> error;
      }

      else{
        echo '<meta http-equiv="refresh" content="0.1">';
      }

  }

    }

  }
 

?>