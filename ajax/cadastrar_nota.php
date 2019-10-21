<?php 

$aluno = $_POST['aluno'];
$nome_nota = $_POST['nome'];
$nota = $_POST['nota'];
$desc = $_POST['descricao'];
$peso = $_POST['peso'];
$bimestre = $_POST['bimestre'];
$materia = $_SESSION['materia'];

$sql = 'insert into tb_nota values(null, $aluno, $materia, $bimestre, $nome_nota, $peso, $nota, $desc)';
$query = $mysqli->query($sql);

echo $sql;

?>