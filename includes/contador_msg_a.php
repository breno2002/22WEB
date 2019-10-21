<?php

$sql_recebeu_professor = 'select count(cd_mensagem_canal1) as "qtd1" from tb_mensagem_professor where id_administrador_canal1 = '.$_SESSION['cd_usuario'].' ';


$query_recebeu_1 = $mysqli->query($sql_recebeu_professor);
     $row_recebeu_1 = $query_recebeu_1 ->fetch_array();

$sql_recebeu_responsavel = 'select count(cd_mensagem_canal2) as "qtd2" from tb_mensagem_responsavel where id_administrador_canal2 = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_2 = $mysqli->query($sql_recebeu_responsavel);

     $row_recebeu_2 = $query_recebeu_2 ->fetch_array();

 $sql_recebeu_administrador = 'select count(cd_mensagem_canal3) as "qtd3" from tb_mensagem_administrador where id_administrador_canal3 = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_3 = $mysqli->query($sql_recebeu_administrador);

     $row_recebeu_3 = $query_recebeu_3 ->fetch_array();

  $sql_mandou = 'select count(cd_mensagem_canal3) as "qtd4" from tb_mensagem_administrador where id_administrador = '.$_SESSION['cd_usuario'].' ';

     $query_recebeu_4 = $mysqli->query($sql_mandou);

     $row_recebeu_4 = $query_recebeu_4 ->fetch_array();

     $soma = $row_recebeu_1['qtd1']+$row_recebeu_2['qtd2']+$row_recebeu_3['qtd3']+$row_recebeu_4['qtd4'];

     echo $soma;


?>