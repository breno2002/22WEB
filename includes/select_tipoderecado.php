
        <?php
        $sql_recado = 'select * from tb_tipo_recado';

        $c =0;
        if ($query_recado = $mysqli->query($sql_recado)) {
          while ($row_recado = $query_recado->fetch_array()) {

          	$c++;

                echo utf8_encode('<div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline'.$c.'" class="custom-control-input" value='.$row_recado['cd_tipo_recado'].' name="tipo">
                      <label class="custom-control-label" for="customRadioInline'.$c.'">'.$row_recado['nm_tipo_recado'].'</label>
                    </div>');

          }
        }

        
        ?>
