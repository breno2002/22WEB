<?php
if (isset($_POST['mandar_professor'])) {

  $nome_prof= $_POST['nome_professor'].' '.$_POST['sobrenome_professor'];
  $id_prof = 2;
  $senha_prof= $_POST['senha_professor'];
  $cpf_prof = $_POST['cpf_professor'];
  $rg_prof = $_POST['rg_professor'];
  $telefone_prof = $_POST['telefone_professor'];
  $idade_prof = $_POST['idade_professor'];
  $celular_prof = $_POST['celular_professor'];
  $ddd_prof = $_POST['ddd_professor'];
  $complemento_prof = $_POST['complemento_professor'];
  $bairro_prof = $_POST['bairro_professor'];
  $cidade_prof = $_POST['cidade_professor'];
  $inscricao_prof = date('Y.m.d-H.i.s');
  $estado_prof = $_POST['estado_professor'];
  $materia = $_POST['materia_professor'];
  $sexo_prof = $_POST['sexo_professor'];
  $atividade = $_POST['atividade'];

if(isset($_FILES['foto_professor']))
{
      $extensao = strtolower(substr($_FILES['foto_professor']['name'],-4)); //Pegando extensão do arquivo
      $nome = $nome_prof . $extensao; //Definindo um novo nome para o arquivo
      $pasta = '../fotos/professores/'; //Diretório para uploads

        move_uploaded_file($_FILES['foto_professor']['tmp_name'], $pasta.$nome); //Fazer upload do arquivo
        $foto_prof = $pasta.$nome;
}


  $sql_prof = 'insert into tb_professor values(null, "'.$nome_prof.'", "'.$senha_prof.'", "'.$cpf_prof.'", "'.$rg_prof.'", "'.$idade_prof.'", "'.$inscricao_prof.'", '.$estado_prof.', "'.$pasta.$nome.'", '.$materia.', '.$atividade.', '.$sexo_prof.');';

  if(!$mysqli->query($sql_prof)){
     echo "Error%s/n", $mysqli -> error;
  }


}

?>