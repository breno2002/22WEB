
<?php
  
  $nome_aluno = $_POST['nome'].' '.$_POST['sobrenome'];
  $rg_aluno = $_POST['rg'];
  $telefone_aluno = $_POST['telefone'];
  $turma_aluno = $_POST['turma'];
  $endereco_aluno = $_POST['endereco'];
  $sexo_aluno = $_POST['sexo'];
  $idade_aluno = $_POST['idade'];
  $periodo_aluno = $_POST['periodo'];
  $sozinho_aluno = $_POST['sozinho'];

  $sql_aluno = 'insert into tb_aluno values(null, "'.$nome_aluno.'", "'.$turma_aluno.'", "'.$sexo_aluno.'", "'.$periodo_aluno.'", "'.$endereco_aluno.'", "'.$rg_aluno.'", "'.$telefone_aluno.'", "'.$sozinho_aluno.'", "'.$idade_aluno.'");';

  if(!$mysqli->query($sql_aluno)){
     echo "Error%s/n", $mysqli -> error;
  }

  echo $sql_aluno;
  

?>