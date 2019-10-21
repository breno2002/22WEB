<?php
$sql_recebeu_professor = 'select * from tb_mensagem_professor where id_professor_canal1 = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_1 = $mysqli->query($sql_recebeu_professor);

if ($query_recebeu_1->num_rows >= 1) {

     while ($row_r1 = $query_recebeu_1->fetch_array()) {
     
     $sql_nome_p = 'select * from tb_professor where cd_professor = " '.$row_r1['id_professor'].' " ';

                    $query_p = $mysqli->query($sql_nome_p);  

                    $row_p = $query_p->fetch_array();

                    echo "<p><b>".$row_p['nm_professor']."</b> mandou-lhe : ".$row_r1['ds_recado_canal1']."   <b>às ".$row_r1['dt_horario_canal1']."</b></p> " ;
     }
 }

$sql_recebeu_responsavel = 'select * from tb_mensagem_responsavel where id_professor_canal2 = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_2 = $mysqli->query($sql_recebeu_responsavel);

if ($query_recebeu_2->num_rows >= 1) {

     while ($row_r2 = $query_recebeu_2->fetch_array()) {
     
     $sql_nome_r = 'select * from tb_professor where cd_responsavel = " '.$row_r2['id_reponsavel'].' " ';

                    $query_r = $mysqli->query($sql_nome_r);  

                    $row_r = $query_r->fetch_array();

                    echo "<p><b>".$row_r['nm_professor']."</b> mandou-lhe : ".$row_r2['ds_recado_canal2']."   <b>às ".$row_r2['dt_horario_canal2']."</b></p> " ;
     }
 }

 $sql_recebeu_administrador = 'select * from tb_mensagem_administrador where id_professor_canal3 = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_3 = $mysqli->query($sql_recebeu_administrador);

if ($query_recebeu_3->num_rows >= 1) {

     while ($row_r3 = $query_recebeu_3->fetch_array()) {
     
     $sql_nome_a = 'select * from tb_professor where cd_administrador = " '.$row_r3['id_administrador'].' " ';

                    $query_a = $mysqli->query($sql_nome_a);  

                    $row_a = $query_a->fetch_array();

                    echo "<p><b>".$row_a['nm_professor']."</b> mandou-lhe : ".$row_r3['ds_recado_canal3']."   <b>às ".$row_r3['dt_horario_canal3']."</b></p> " ;
     }
 }

  $sql_mandou = 'select * from tb_mensagem_professor where id_professor = '.$_SESSION['cd_usuario'].' ';

$query_recebeu_4 = $mysqli->query($sql_mandou);

if ($query_recebeu_4->num_rows >= 1) {

     while ($row_r4 = $query_recebeu_4->fetch_array()) {
     
     $sql_nome_mandou = 'select * from tb_professor where cd_professor = " '.$row_r4['id_professor_canal1'].' " ';

                    $query_mandou = $mysqli->query($sql_nome_mandou);  

                    $row_mandou = $query_mandou->fetch_array();

                    echo "<p><b>".$row_mandou['nm_professor']."</b> mandou-lhe : ".$row_r4['ds_recado_canal1']."   <b>às ".$row_r4['dt_horario_canal1']."</b></p> " ;
     }
 }


?>