<?php 

        $sql_inf = 'select * from tb_aluno inner join tb_autorizacao on(tb_aluno.id_autorizacao = tb_autorizacao.cd_autorizacao)
        inner join tb_turma on(tb_aluno.id_turma = tb_turma.cd_turma)
         where cd_aluno = "'.$_GET['id'].'";';

        $select_inf = $mysqli->query($sql_inf);

          while ($row_inf = $select_inf->fetch_array()) {
          	echo utf8_encode('<p><li>Nome do aluno:'.$row_inf['nm_aluno'].'</li>
          <li>Idade do aluno:'.$row_inf['vl_idade'].'</li>
          <li>Saida:'.$row_inf['ds_status'].'</li>
          <li>Periodo:'.$row_inf['ds_turma'].'</li>
          ');

          echo '</p>';  
          }
        ?>