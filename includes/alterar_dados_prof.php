<?php

if (isset($_POST['mandar_alt'])) {

	if (isset($_POST['nome_professor'])) {
		$nome_sql = 'update tb_professor set nm_professor = "'.$_POST['nome_professor'].'" where cd_professor = '.$_SESSION['cd_usuario'].' ';

		$query_nome = $mysqli->query($nome_sql);

	}

	if (isset($_POST['ativo'])) {
		$ativo_sql = 'update tb_professor set ds_ativo = "'.$_POST['ativo'].'" where cd_professor = '.$_SESSION['cd_usuario'].' ';

		$query_ativo = $mysqli->query($ativo_sql);
	}

	echo '<meta http-equiv="refresh" content="0.1">';

}
?>