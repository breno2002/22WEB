<?php 

        $sql_img_aluno = 'select * from tb_aluno where cd_aluno = "'.$_GET['id'].'"';

        if($select_img_aluno = $mysqli->query($sql_img_aluno)){

          $row_img_aluno = $select_img_aluno->fetch_array();

          echo '<img style="width:260px; height:260px;" src="'.$row_img_aluno['ds_foto'].'">';

        } 

        ?>