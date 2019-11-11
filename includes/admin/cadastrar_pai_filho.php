<?php

  $sql_rel = 'insert into tb_aluno_responsavel values(null, '.$result_cd2['cd_aluno'].', '.$result_cd1['cd_responsavel'].')';

  $query_rel = $mysqli->query($sql_rel);
  

?>