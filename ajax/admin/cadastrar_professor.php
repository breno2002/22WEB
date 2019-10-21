<?php

if (isset($_POST['mandar'])) {

  $nome_admin= $_POST['nome'].' '.$_POST['sobrenome'];
  $id_admin = 2;
  $senha_admin= $_POST['senha'];
  $cpf_admin = $_POST['cpf'];
  $rg_admin = $_POST['rg'];
  $telefone_admin = $_POST['tel'];
  $idade_admin = $_POST['idade'];
  $celular_admin = $_POST['celular'];
  $ddd_admin = $_POST['ddd'];
  $complemento_admin = $_POST['complemento'];
  $bairro_admin = $_POST['bairro'];
  $cidade_admin = $_POST['cidade'];
  $inscricao_admin = date('Y.m.d-H.i.s');
  $estado_admin = $_POST['estado'];

if(isset($_FILES['foto']))
{
      $extensao = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
      $nome = $nome_admin . $extensao; //Definindo um novo nome para o arquivo
      $pasta = 'fotos/admin/'; //Diretório para uploads

        move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$nome); //Fazer upload do arquivo
        $foto_admin = $pasta.$nome;
}


  $sql_admin = 'insert into tb_usuario values(null, "'.$nome_admin.'", "'.$id_admin.'", "'.$senha_admin.'", "'.$cpf_admin.'", "'.$rg_admin.'", "'.$telefone_admin.'", "'.$idade_admin.'", "'.$celular_admin.'", "'.$ddd_admin.'", "'.$complemento_admin.'", "'.$bairro_admin.'", "'.$cidade_admin.'", "'.$inscricao_admin.'", "'.$estado_admin.'", "'.$foto_admin.'");';

  echo $sql_admin;

  if(!$mysqli->query($sql_admin)){
     echo "Error%s/n", $mysqli -> error;
  }
  
}

?>