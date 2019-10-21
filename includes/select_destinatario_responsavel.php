
        <?php
        $sql_pessoas_resp = 'select * from tb_responsavel';

        if ($query_pessoas_resp = $mysqli->query($sql_pessoas_resp)) {
          while ($row_pessoas_resp = $query_pessoas_resp->fetch_array()) {
              if ($row_pessoas_resp['ds_cpf_responsavel'] == $_SESSION['cpf_usuario']){
              }

              else{
                echo '<option value="'.$row_pessoas_resp['ds_cpf_responsavel'].'">'.$row_pessoas_resp['nm_responsavel'].'</option>';  
              }

          }
        }

        
        ?>
