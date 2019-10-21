<?php 

if (isset($_POST['mandar_nota'])) {
	$nome_nota = $_POST['nome'];
	$desc = $_POST['txt'];
	$peso = $_POST['peso'];
	$bimestre = $_POST['bimestre'];
	$materia = $_SESSION['materia'];
	$turma = $_POST['turma']; 

	$sql_atividade = 'insert into tb_atividade values(null,"'.$nome_nota.'", "'.$peso.'", "'.$desc.'", "'.$materia.'", "'.$bimestre.'", "'.$turma.'")';
	$query_atividade = $mysqli->query($sql_atividade);

	echo '<meta http-equiv="refresh" content="0.1">';
	echo $sql_atividade;

}

?>