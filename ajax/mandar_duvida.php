<?php

$nome = $_POST['nome'];
$tel = $_POST['telefone'];
$email = $_POST['email'];
$duvida = $_POST['duvida'];

$sql_duvida = 'insert into tb_formulario_interesse values(null, "'.$nome.'", "'.$tel.'", "'.$email.'", "'.$duvida.'")';
$query_duvida = $mysqli->query($sql_duvida);
if ($query_duvida -> num_rows > 0) {
	echo 'O seu formulário foi cadastrado com sucesso.';
}

?>