<?php

 $sql_mat= 'select * from tb_materia where cd_materia = '.$_SESSION['materia'].';'; 

            $query_nome_mat = $mysqli->query($sql_mat);

            while ($row_mat = $query_nome_mat->fetch_array()) {
              echo utf8_encode('<li>Professor de '.$row_mat['nm_materia'].'</li>');           
            }
?>