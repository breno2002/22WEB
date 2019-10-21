<?php

if (!empty($_POST['txt'])) {
	$sql_mudar_descricao = 'update tb_atividade set ds_nota  = "'.$_POST['txt'].'" where cd_atividade = '.$_GET['id'].' ';
	echo $sql_mudar_descricao;

		if (!$query_m1 = $mysqli->query($sql_mudar_descricao)){
	}

}
	
if (!empty($_POST['bimestre'])) {
	$sql_mudar_bimestre = 'update tb_atividade set id_bimestre = '.$_POST['bimestre'].' where cd_atividade = '.$_GET['id'].' ';
	echo $sql_mudar_bimestre;

		if (!$query_m2 = $mysqli->query($sql_mudar_bimestre)) {
		echo 'vai se foder porra';
	}

}
	
if (!empty($_POST['peso'])) {
		$sql_mudar_peso = 'update tb_atividade set vl_peso = '.$_POST['peso'].' where cd_atividade = '.$_GET['id'].' ';
		echo $sql_mudar_peso;

		if (!$query_m3 = $mysqli->query($sql_mudar_peso)){
	}
}

if (!empty($_POST['turma'])) {
		$sql_mudar_turma = 'update tb_atividade set id_turma = '.$_POST['turma'].' where cd_atividade = '.$_GET['id'].' ';
		echo $sql_mudar_peso;

		if (!$query_m4 = $mysqli->query($sql_mudar_turma)){
	}
}

?>