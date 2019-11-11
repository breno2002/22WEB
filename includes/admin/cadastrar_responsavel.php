
<?php
if (isset($_POST['mandar'])) {
  
  $cd_resp = 'null';
  $nome_resp= $_POST['nome_responsavel'].' '.$_POST['sobrenome_responsavel'];
  $id_resp = 3;
  $senha_resp= $_POST['senha_responsavel'];
  $cpf_resp = $_POST['cpf_responsavel'];
  $rg_resp = $_POST['rg_responsavel'];
  $telefone_resp = $_POST['telefone_responsavel'];
  $idade_resp = $_POST['idade_responsavel'];
  $celular_resp = $_POST['celular_responsavel'];
  $ddd_resp = $_POST['ddd_responsavel'];
  $complemento_resp = $_POST['complemento_responsavel'];
  $bairro_resp = $_POST['bairro_responsavel'];
  $cidade_resp = $_POST['cidade_responsavel'];
  $inscricao_resp = date("Y.m.d-H.i.s");
  $estado_resp = $_POST['estado_responsavel'];
  $sexo_resp = $_POST['sexo_responsavel'];

if(isset($_FILES['foto_responsavel']))
{
$extensao = strtolower(substr($_FILES['foto_responsavel']['name'],-4)); //Pegando extensão do arquivo
$nome = $nome_resp . $extensao; //Definindo um novo nome para o arquivo
$pasta = '../fotos/responsaveis/'; //Diretório para uploads
move_uploaded_file($_FILES['foto_responsavel']['tmp_name'], $pasta.$nome); //Fazer upload do arquivo

$foto_resp = $pasta.$nome;
}

  $sql_resp = 'insert into tb_responsavel values(null, "'.$nome_resp.'", "'.$senha_resp.'", "'.$cpf_resp.'", "'.$rg_resp.'", "'.$idade_resp.'", "'.$inscricao_resp.'", "'.$estado_resp.'", "'.$pasta.$nome.'", '.$sexo_resp.');';

  echo $sql_resp;

  if(!$mysqli->query($sql_resp)){
     echo "Error%s/n", $mysqli -> error;
  }

  else{
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

  if(!$mysqli->query($sql_aluno)){
     echo "Error%s/n", $mysqli -> error;
    }

    else{
        $sql_rel = 'select * from tb_aluno order by cd_aluno desc LIMIT 1';

        $query1 = $mysqli->query($sql_rel);
        $result1 = $query1->fetch_array();

        $aluno = $result1['cd_aluno'];


        $sql_rel2= 'select * from tb_responsavel order by cd_responsavel desc LIMIT 1';

        $query2 = $mysqli->query($sql_rel2);
        $result2 = $query2->fetch_array();

        $resp = $result2['cd_responsavel'];

        $sql_rel3 = 'insert into tb_aluno_responsavel values(null, '.$aluno.', '.$resp.')';
        $result3 = $mysqli->query($sql_rel3);
    }

  }

}

?>