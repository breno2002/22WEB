<?php

if (isset($_POST['mandar_administrador'])) {

  $nome_admin= $_POST['nome_administrador'].' '.$_POST['sobrenome_administrador'];
  $id_admin = 1;
  $senha_admin= $_POST['senha_administrador'];
  $cpf_admin = $_POST['cpf_administrador'];
  $rg_admin = $_POST['rg_administrador'];
  $telefone_admin = $_POST['telefone_administrador'];
  $idade_admin = $_POST['idade_administrador'];
  $celular_admin = $_POST['celular_administrador'];
  $ddd_admin = $_POST['ddd_administrador'];
  $complemento_admin = $_POST['complemento_administrador'];
  $bairro_admin = $_POST['bairro_administrador'];
  $cidade_admin = $_POST['cidade_administrador'];
  $inscricao_admin = date('Y.m.d-H.i.s');
  $estado_admin = $_POST['estado_administrador'];
  $sexo_admin = $_POST['sexo_administrador'];

if(isset($_FILES['foto_administrador']))
{
      $extensao = strtolower(substr($_FILES['foto_administrador']['name'],-4)); //Pegando extensão do arquivo
      $nome = $nome_admin . $extensao; //Definindo um novo nome para o arquivo
      $pasta = '../fotos/admin/'; //Diretório para uploads

        move_uploaded_file($_FILES['foto_administrador']['tmp_name'], $pasta.$nome); //Fazer upload do arquivo
        $foto_admin = $pasta.$nome;
}


  $sql_admin = 'insert into tb_administrador values(null, "'.$nome_admin.'", "'.$senha_admin.'", "'.$cpf_admin.'", "'.$rg_admin.'", "'.$idade_admin.'", "'.$inscricao_admin.'", "'.$estado_admin.'", "'.$foto_admin.'", '.$sexo_admin.');';

  echo $sql_admin;

  if(!$mysqli->query($sql_admin)){
     echo "Error%s/n", $mysqli -> error;
  }
  
}

?>