
<?php
  
  if (isset($_POST['mandar'])) {
  $nome_aluno = $_POST['nome_aluno'].' '.$_POST['sobrenome_aluno'];
  $rg_aluno = $_POST['rg_aluno'];
  $turma_aluno = $_POST['turma_aluno'];
  $sexo_aluno = $_POST['sexo_aluno'];
  $idade_aluno = $_POST['idade_aluno'];
  $sozinho_aluno = $_POST['sozinho_aluno'];

  if(isset($_FILES['foto_aluno']))
{
      $extensao = strtolower(substr($_FILES['foto_aluno']['name'],-4)); //Pegando extensão do arquivo
      $nome = $nome_aluno . $extensao; //Definindo um novo nome para o arquivo
      $pasta = '../fotos/alunos/'; //Diretório para uploads

        move_uploaded_file($_FILES['foto_aluno']['tmp_name'], $pasta.$nome); //Fazer upload do arquivo
        $foto_aluno = $pasta.$nome;
}

   $sql_aluno = 'insert into tb_aluno values(null, "'.$nome_aluno.'", "'.$rg_aluno.'", "'.$sozinho_aluno.'", '.$idade_aluno.', "'.$pasta.$nome.'", '.$turma_aluno.', '.$sexo_aluno.');';

   echo $sql_aluno;

  if(!$mysqli->query($sql_aluno)){
     echo "Error%s/n", $mysqli -> error;
  }
  
  }
?>