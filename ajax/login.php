<?php

session_start();

include('conexao.php');

$senha = $_POST['senha'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$sql_professor = 'select * from tb_professor';

$query_u = $mysqli -> query($sql_professor);

while ($row_u = $query_u->fetch_array()) {

  if ($row_u['nm_professor']==$nome) {
    if ($row_u['ds_senha_professor']==$senha) {
      if ($row_u['ds_cpf_professor']==$cpf) {

        $_SESSION['login'] = 1;
        $_SESSION['cd_usuario'] = $row_u['cd_professor'];
        $_SESSION['cpf_usuario'] = $row_u['ds_cpf_professor'];

          $_SESSION['chave'] = 2;
          $_SESSION['materia'] = $row_u['id_materia_professor'];
          echo "location.href = 'professor.php';";

        }

        }
      }
    }


  $sql_adm = 'select * from tb_administrador';

  $query_a = $mysqli -> query($sql_adm);

while ($row_a = $query_a->fetch_array()) {

  if ($row_a['nm_administrador']==$nome) {
    if ($row_a['ds_senha_administrador']==$senha) {
      if ($row_a['ds_cpf_administrador']==$cpf) {

        $_SESSION['login'] = 1;
        $_SESSION['cd_usuario'] = $row_a['cd_administrador'];
        $_SESSION['cpf_usuario'] = $row_a['ds_cpf_administrador'];
        
        $_SESSION['chave'] = 1;
        echo "location.href = 'painel_adm/index.php';";

        }
          

        }
      }
    
  }



$sql_responsavel = 'select * from tb_responsavel';

  $query_r = $mysqli -> query($sql_responsavel);

while ($row_r = $query_r->fetch_array()) {

  if ($row_r['nm_responsavel']==$nome) {
    if ($row_r['ds_senha_responsavel']==$senha) {
      if ($row_r['ds_cpf_responsavel']==$cpf) {

        $_SESSION['login'] = 1;
        $_SESSION['cd_usuario'] = $row_r['cd_responsavel'];
        $_SESSION['cpf_usuario'] = $row_r['ds_cpf_responsavel'];
        
           $_SESSION['chave'] = 3;
          echo "location.href = 'responsavel.php';";

        }
          

        }
      }
    
  }




?>