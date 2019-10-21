
        <?php
        $sql_pessoas_adm = 'select * from tb_administrador';

        if ($query_pessoas_adm = $mysqli->query($sql_pessoas_adm)) {
          while ($row_pessoas_adm = $query_pessoas_adm->fetch_array()) {
              if ($row_pessoas_adm['ds_cpf_administrador'] == $_SESSION['cpf_usuario']){
              }

              else{
                echo '<option value="'.$row_pessoas_adm['ds_cpf_administrador'].'">'.$row_pessoas_adm['nm_administrador'].'</option>';  
              }
          }
        }

        
        ?>
