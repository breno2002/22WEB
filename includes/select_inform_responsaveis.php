<?php 

        $sql_inf = 'select * from tb_responsavel where cd_administrador = "'.$_SESSION['cd_usuario'].'"';

        if($select_inf = $mysqli->query($sql_inf)){

          $row_inf = $select_inf->fetch_array();

          echo '<p><li>Nome:'.$row_inf['nm_administrador'].'</li>';

            echo '<a href="alterar.php" id="alterar"><li>Alterar senha</li></a>';

          echo '</p>';  

            } 

        ?>