<?php 

        $sql_inf = 'select * from tb_professor where cd_professor = "'.$_SESSION['cd_usuario'].'"';

        if($select_inf = $mysqli->query($sql_inf)){

          $row_inf = $select_inf->fetch_array();

          echo '<p><b>Nome:</b>'.$row_inf['nm_professor'].'</p>';

          $sql_email = 'select * from tb_email_professor where id_professor ='.$_SESSION['cd_usuario'].';';

          $query_email = $mysqli->query($sql_email);

          $sql_contato = 'select * from tb_contato_professor where id_professor ='.$_SESSION['cd_usuario'].';';

          $query_contato = $mysqli->query($sql_contato);

          $sql_endereco = 'select * from tb_endereco_professor where id_professor ='.$_SESSION['cd_usuario'].';';

          $query_endereco = $mysqli->query($sql_endereco);

          while ($row_endereco = $query_endereco->fetch_array()) {
           
            echo '<p><b>Endereço:</b>'.$row_endereco['ds_cidade'].' '.$row_endereco['ds_bairro'].' '.$row_endereco['ds_complemento'].'</p>';

          }

          $query_contato = $mysqli->query($sql_contato);


          while ($row_contato = $query_contato->fetch_array()) {
           
            echo '<p><b>Contato:</b>('.$row_contato['ds_ddd'].') '.$row_contato['ds_celular'].'</p>';

          }

          while ($row_email = $query_email->fetch_array()) {
           
            echo '<p><b>Email:</b>'.$row_email['nm_email'].'</p>';

          }

          if($row_inf['ds_ativo'] == 0){
            echo '<p><b>Status:</b> Inativo</p>';
          }

          else{
            echo '<p><b>Status:</b> Ativo</p>';
          }
          

          echo '<a href="alterar_dados_professor.php" id="alterar"><b>Alterar dados</b></a>'; 

            } 

        ?>