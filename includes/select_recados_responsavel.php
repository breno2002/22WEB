<?php

$sql_recado = 'select * from tb_recado_canal_responsavel
          
          inner join tb_responsavel on(tb_responsavel.cd_responsavel = tb_recado_canal_responsavel.id_usuario_mandar_canal1)

          left join tb_recado_canal_administrador on(tb_responsavel.cd_responsavel = tb_recado_canal_administrador.id_usuario_responsavel_canal3)


          where cd_responsavel = '.$_SESSION['cd_usuario'].' group by cd_recado_canal1;';

          $query_recado = $mysqli->query($sql_recado);

          while ($row_rec = $query_recado->fetch_array()) {

               if ($row_rec['id_usuario_mandar_canal1'] == $_SESSION['cd_usuario']) {

                    if (!empty($row_rec['id_usuario_administrador_canal1'])) {
                         $cd_adm = $row_rec['id_usuario_administrador_canal1'];
                         $sql_adm_mandar = 'select * from tb_administrador where cd_administrador = "'.$cd_adm.'"';

                         $query_adm_mandar = $mysqli->query($sql_adm_mandar);
                         $row_adm_mandar = $query_adm_mandar->fetch_array();

                         $sql_tipo = 'select * from tb_tipo_recado where cd_tipo_recado = "'.$row_rec['id_tipo_recado_canal1'].'" ';

                         $tipo = $mysqli->query($sql_tipo);
                         
                         if ($row_tipo = $tipo->fetch_array()) {
                              if ($row_tipo['cd_tipo_recado'] == '1') {

                                   echo '<p>Você';
                                     echo utf8_encode(' mandou um recado para '.$row_adm_mandar['nm_administrador'].' do tipo <b style= "color :#b71c1c;">'.$row_tipo['nm_tipo_recado'].':</b> '.$row_rec['ds_recado_canal1'].'</p>');
                              }
                              if ($row_tipo['cd_tipo_recado']=='2') {
                                    echo '<p>Você';
                                   echo utf8_encode(' mandou um recado para '.$row_adm_mandar['nm_administrador'].' do tipo <b style= "color :#ffb74d;">'.$row_tipo['nm_tipo_recado'].':</b> '.$row_rec['ds_recado_canal1'].'</p>');
                              }

                               if ($row_tipo['cd_tipo_recado']=='3') {
                                    echo '<p>Você';
                                   echo utf8_encode(' mandou um recado para '.$row_adm_mandar['nm_administrador'].' do tipo <b style= "color :#29b6f6;">'.$row_tipo['nm_tipo_recado'].':</b> '.$row_rec['ds_recado_canal1'].'</p>');
                              }
                         }

                        
                    }
                         
               }
          }


                    if ($row_rec['id_usuario_responsavel_canal3'] == $_SESSION['cd_usuario']) {

                    $select_adm = 'select * from tb_administrador where cd_administrador = "'.$row_rec['id_usuario_administrador_canal3'].'"';
                    $query_nome_adm = $mysqli->query($select_resp);
                    $nome_adm = $query_nome_resp->fetch_array();

                    echo '<p>'.$nome_adm.' mandou para você:'.$row_rec['ds_recado_canal3'].'</p>';

                    }
                         
?>