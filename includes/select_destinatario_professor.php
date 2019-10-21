
        <?php
        $sql_pessoas_prof = 'select * from tb_professor';

        if ($query_pessoas_prof = $mysqli->query($sql_pessoas_prof)) {
          while ($row_pessoas_prof = $query_pessoas_prof->fetch_array()) {
              if ($row_pessoas_prof['ds_cpf_professor'] == $_SESSION['cpf_usuario']){
              }

              else{
                echo '<option value="'.$row_pessoas_prof['ds_cpf_professor'].'">'.$row_pessoas_prof['nm_professor'].'</option>';  
              }
          }
        }

        
        ?>
