<?php 

      $sql_alunos = 'select * from tb_aluno 
      left join tb_nota on(tb_nota.id_aluno = tb_aluno.cd_aluno) group by nm_aluno';

      $consulta_aluno = $mysqli -> query($sql_alunos);
        
      while ($row_aluno = $consulta_aluno->fetch_array()) {
        
          echo utf8_encode('<a href="aluno.php?id='.$row_aluno['cd_aluno'].'" id="cor"><li>'.$row_aluno['nm_aluno'].'</a>') ;

        $sql_notas = 'select * from tb_nota inner join tb_atividade on(tb_atividade.cd_atividade = tb_nota.id_atividade) inner join tb_materia on(tb_materia.cd_materia = tb_atividade.id_materia) where cd_materia = "'.$_SESSION['materia'].'" and id_aluno = '.$row_aluno['cd_aluno'].' ';

        $query_notas = $mysqli->query($sql_notas);

        while ($row_nota = $query_notas->fetch_array()) {
         echo '<div id="col s2"><b>Nome da atividade:</b>'.$row_nota['nm_atividade']. ' Menção:' .$row_nota['vl_nota']. ' Bimestre: '.$row_nota['id_bimestre'].'º Bimestre';
         echo '   <a href="nota.php?id='.$row_nota['cd_nota'].'" id="delete">deletar</a>      <a href="alterar.php?id='.$row_nota['cd_nota'].'" id="mudar">alterar</a></div>';
         }
        
        }

      ?>