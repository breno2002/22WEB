<?php 

if (isset($_POST['mandar_nota'])) {
	$aluno = $_POST['aluno'];
	$nota = $_POST['nota'];
	$atividade = $_POST['atividade'];
	$c=0;

	$sql_restrito= 'select * from tb_nota
	inner join tb_aluno on(tb_nota.id_aluno = tb_aluno.cd_aluno) where id_atividade = "'.$atividade.'" ';

	echo $sql_restrito;

	$query_restrito = $mysqli->query($sql_restrito);

	if ($query_restrito->num_rows >= 1) {
		
		echo '<script>alert("O aluno já possui uma nota nessa atividade");</script>';

	}

	if ($query_restrito->num_rows < 1){

		$sql_cota_bimestre = 'select * from tb_nota where id_aluno = "'.$aluno.'" ';
		$query_cota = $mysqli->query($sql_cota_bimestre);
		echo $sql_cota_bimestre;

		while ($row_cota = $query_cota->fetch_array()) {
			$c++;
		}

		if ($c>4) {
			echo $c;
			echo 'tem 4 atividades';
		}

		if ($c<4) {
			$sql = 'insert into tb_nota values(null, "'.$aluno.'", "'.$nota.'", "'.$atividade.'")';
				$query = $mysqli->query($sql);

				echo $sql;
				
				echo $c;
				echo 'n tem quatro atividades.';
		}
				
	}
	

	
}

?>