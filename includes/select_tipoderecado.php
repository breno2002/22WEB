
        <?php
        $sql_recado = 'select * from tb_tipo_recado';

        if ($query_recado = $mysqli->query($sql_recado)) {
          while ($row_recado = $query_recado->fetch_array()) {

                echo utf8_encode('<option value="'.$row_recado['cd_tipo_recado'].'">'.$row_recado['nm_tipo_recado'].'</option>'); 

          }
        }

        
        ?>
