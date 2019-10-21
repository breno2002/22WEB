<?php 

if (isset($_POST['mandar'])) {
$sql_rel = 'select * from tb_aluno order by desc LIMIT 1';

$query1 = $mysqli->query($sql_rel);
$result1 = $query1->fetch_array();

$aluno = $result1['cd_aluno'];


$sql_rel2= 'select * from tb_responsavel order by desc LIMIT 1';

$query2 = $mysqli->query($sql_rel2);
$result2 = $query2->fetch_array();

$resp = $result2['cd_responsavel'];

$sql_rel3 = 'insert into tb_aluno_responsavel values(null, '.$aluno.', '.$resp.')';
$result3 = $mysqli->query($sql_rel3);
}


?>