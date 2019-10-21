<?php 

if (!empty($_POST['add'])) {
	if (!empty($_POST['email_professor'])) {
	$sql_e = 'insert into tb_email_professor values(null, "'.$_POST['email_professor'].'", '.$_SESSION['cd_usuario'].')';

	$query_e = $mysqli->query($sql_e);
	echo '<meta http-equiv="refresh" content="0.1">';
	}

	if (!empty($_POST['contato_professor'])) {
		$sql_c = 'insert into tb_contato_professor values(null, "'.$_POST['contato_professor'].'", "'.$_POST['ddd'].'", '.$_SESSION['cd_usuario'].')';

		$query_c = $mysqli->query($sql_c);
		echo '<meta http-equiv="refresh" content="0.1">';
	}

	if (!empty($_POST['complemento_professor'])) {
		if (!empty($_POST['bairro_professor'])) {
			if (!empty($_POST['cidade_professor'])) {

				$sql_en = 'insert into tb_endereco_professor values(null, "'.$_POST['complemento_professor'].'", "'.$_POST['bairro_professor'].'", "'.$_POST['cidade_professor'].'", '.$_SESSION['cd_usuario'].')';

		$query_en = $mysqli->query($sql_en);
		echo '<meta http-equiv="refresh" content="0.1">';
	}
}
}
}


?>
