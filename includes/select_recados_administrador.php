<?php

$sql_recado = 'select * from tb_recado_canal_administrador
          
          inner join tb_administrador on(tb_administrador.cd_administrador = tb_recado_canal_administrador.id_usuario_mandar_canal3)

          left join tb_recado_canal_responsavel on(tb_administrador.cd_administrador = tb_recado_canal_responsavel.id_usuario_administrador_canal1)


          where cd_administrador = '.$_SESSION['cd_usuario'].' group by cd_recado_canal3;';

          $query_recado = $mysqli->query($sql_recado);

          while ($row_rec = $query_recado->fetch_array()) {

               if ($row_rec['id_usuario_mandar_canal3'] == $_SESSION['cd_usuario']) {

                    if (!empty($row_rec['id_usuario_responsavel_canal3'])) {
                         $cd_adm = $row_rec['id_usuario_responsavel_canal3'];
                         $sql_adm_mandar = 'select * from tb_responsavel where cd_responsavel = "'.$cd_adm.'"';

                         $query_adm_mandar = $mysqli->query($sql_adm_mandar);
                         $row_adm_mandar = $query_adm_mandar->fetch_array();

                         $sql_tipo = 'select * from tb_tipo_recado where cd_tipo_recado = "'.$row_rec['id_tipo_recado_canal3'].'" ';

                         $tipo = $mysqli->query($sql_tipo);
                         
                         if ($row_tipo = $tipo->fetch_array()) {
                              if ($row_tipo['cd_tipo_recado'] == '1') {

                                     echo'<tr>
                                            <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
                                            <td><strong>Você';

                                            echo utf8_encode('para '.$row_adm_mandar['nm_responsavel'].'</strong></td>
                                            <td><span class="label pull-right" style= "color :#b71c1c;">'.$row_tipo['nm_tipo_recado'].'</span></td>
                                            <td><strong>'.$row_rec['ds_recado_canal3'].'</strong></td>
                                            <td><strong>'.$row_rec['ds_horario_data'].'</strong></td>
                                            <td><i class="fas fa-eye"></i></td>
                                          </tr>') ;

                              }
                              if ($row_tipo['cd_tipo_recado']=='2') {

                                   echo'<tr>
                                            <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
                                            <td><strong>Você';

                                            echo utf8_encode('para '.$row_adm_mandar['nm_responsavel'].'</strong></td>
                                            <td><span class="label pull-right" style= "color :#ffb74d;">'.$row_tipo['nm_tipo_recado'].'</span></td>
                                            <td><strong>'.$row_rec['ds_recado_canal3'].'</strong></td>
                                            <td><strong>'.$row_rec['ds_horario_data'].'</strong></td>
                                            <td><i class="fas fa-eye"></i></td>
                                          </tr>') ;
                              }

                               if ($row_tipo['cd_tipo_recado']=='3') {
                                    echo'<tr>
                                            <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
                                            <td><strong>Você';

                                            echo utf8_encode('para '.$row_adm_mandar['nm_responsavel'].'</strong></td>
                                            <td><span class="label pull-right" style= "color :#29b6f6;">'.$row_tipo['nm_tipo_recado'].'</span></td>
                                            <td><strong>'.$row_rec['ds_recado_canal3'].'</strong></td>
                                            <td><strong>'.$row_rec['ds_horario_data'].'</strong></td>
                                            <td><i class="fas fa-eye"></i></td>
                                          </tr>') ;
                              }
                         }

                        
                    }
                         
               }
          }


                    if ($row_rec['id_usuario_administrador_canal1'] == $_SESSION['cd_usuario']) {

                    $select_adm = 'select * from tb_administrador where cd_administrador = "'.$row_rec['id_usuario_administrador_canal1'].'"';
                    $query_nome_adm = $mysqli->query($select_resp);
                    $nome_adm = $query_nome_resp->fetch_array();

                    echo '<p>'.$nome_adm.' mandou para você:'.$row_rec['ds_recado_canal1'].'</p>';

                    }
                         
?>