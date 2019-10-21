
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

  $sql_resp = 'insert into tb_responsavel values(null, "'.$nome_resp.'", ´'.$senha_resp.'´, "'.$cpf_resp.'", "'.$rg_resp.'", "'.$idade_resp.'", "'.$inscricao_resp.'", "'.$estado_resp.'", "'.$pasta.$nome.'", '.$sexo_resp.');';

  echo $sql_resp;

  if(!$mysqli->query($sql_resp)){
     echo "Error%s/n", $mysqli -> error;
  }

}

?>