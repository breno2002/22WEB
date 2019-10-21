<?php

$sql_recado = 'select * from tb_recado_canal_professor
          
          left join tb_recado_canal_responsavel on(tb_recado_canal_professor.id_usuario_mandar_canal2 = tb_recado_canal_responsavel.id_usuario_professor_canal1)

          left join tb_recado_canal_administrador on(tb_recado_canal_professor.id_usuario_mandar_canal2 = tb_recado_canal_administrador.id_usuario_professor_canal3)


          where tb_recado_canal_professor.id_usuario_mandar_canal2 = '.$_SESSION['cd_usuario'].' group by tb_recado_canal_professor.ds_horario_data ;';

          $query_recado = $mysqli->query($sql_recado);

          while ($row_rec = $query_recado->fetch_array()) {

               if ($row_rec['id_usuario_mandar_canal2'] == $_SESSION['cd_usuario']) {

                    if (!empty($row_rec['id_usuario_administrador_canal2'])) {
                         $cd_adm = $row_rec['id_usuario_administrador_canal2'];
                         $sql_adm_mandar = 'select * from tb_administrador where cd_administrador = "'.$cd_adm.'"';

                         $query_adm_mandar = $mysqli->query($sql_adm_mandar);
                         $row_adm_mandar = $query_adm_mandar->fetch_array();

                         echo '<p>Você mandou para '.$row_adm_mandar['nm_administrador'].':'.$row_rec['ds_recado_canal2'].'</p>';
                    }

                    if (!empty($row_rec['id_usuario_responsavel_canal2'])) {
                         $cd_resp = $row_rec['id_usuario_responsavel_canal2'];
                         $sql_resp_mandar = 'select * from tb_responsavel where cd_responsavel = "'.$cd_resp.'"';

                         $query_resp_mandar = $mysqli->query($sql_resp_mandar);
                         $row_resp_mandar = $query_resp_mandar->fetch_array();

                         echo '<p>Você mandou para '.$row_resp_mandar['nm_responsavel'].':'.$row_rec['ds_recado_canal2'].'</p>';
                    }
                         
               }
          }


                    if ($row_rec['id_usuario_professor_canal1'] == $_SESSION['cd_usuario']) {

                    $select_resp = 'select * from tb_responsavel where cd_responsavel = "'.$row_rec['id_usuario_professor_canal1'].'"';
                    $query_nome_resp = $mysqli->query($select_resp);
                    $nome_resp = $query_nome_resp->fetch_array();

                    echo '<p>'.$nome_resp.' mandou para você:'.$row_rec['ds_recado_canal1'].'</p>';

                    }


                    if ($row_rec['id_usuario_professor_canal3'] == $_SESSION['cd_usuario']) {

                    $select_adm = 'select * from tb_administrador where cd_administrador = "'.$row_rec['id_administrador'].'"';
                    $query_nome_adm = $mysqli->query($select_adm);
                    $nome_adm = $query_nome_adm->fetch_array();

                    echo '<p>'.$nome_adm.' mandou para você:'.$row_rec['ds_recado_canal3'].'</p>';

                    }
                         
?>