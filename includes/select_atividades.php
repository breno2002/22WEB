 <?php 
	$sql_atividade = 'select * from tb_atividade
inner join tb_materia on(tb_materia.cd_materia = tb_atividade.id_materia)
inner join tb_bimestre on(tb_bimestre.cd_bimestre = tb_atividade.id_bimestre)
inner join tb_turma on(tb_turma.cd_turma = tb_atividade.id_turma) where cd_materia = "'.$_SESSION['materia'].'" and cd_turma = '.$_POST['turma'].' order by id_turma desc ';

	$query_atividade = $mysqli->query($sql_atividade); 
while ($row_atividade = $query_atividade->fetch_array()) {

	$atividade = $row_atividade['nm_atividade'];
	$nome_materia = $row_atividade['nm_materia'];
	$bimestre = $row_atividade['nm_bimestre'];
	$turma = $row_atividade['ds_turma'];

	echo utf8_encode('<ul><li><b>Atividade de '.$nome_materia.'</b> Nome da atividade:'.$atividade.',  Bimestre: '.$bimestre.', Turma: '.$turma.'</li></ul>');
	echo '<a href="atividade.php?id='.$row_atividade['cd_atividade'].'" id="delete_atividade">deletar </a><a href="alterar.php?id='.$row_atividade['cd_atividade'].'" id="mudar_atividade">alterar</a>';
}

	
?>

<style>
	
	#menu, a{

		color: black;

	}

</style>