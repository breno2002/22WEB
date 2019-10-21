<?php 

        $sql_img = 'select * from tb_administrador where cd_administrador = "'.$_SESSION['cd_usuario'].'"';

        if($select_img = $mysqli->query($sql_img)){

          $row_img = $select_img->fetch_array();

          echo '<img src="'.$row_img['ds_foto_administrador'].'">';

        } 

        ?>