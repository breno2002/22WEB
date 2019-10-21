<form method="post" enctype="multipart/form-data" name='administrador'>

            <div class="col s8 offset-s2">
                      <form method='post' enctype="multipart/form-data">
                        
                        <div class="row">
                        <div class="input-field col s8 m7 l6">
                        <input  id='nome_administrador' type="text" name="nome_administrador" class="form-control" style="background:#DCDCDC;">
                        <label for="nome_administrador">Nome do administrador</label>
                        </div>

                        <div class="input-field col s4 m5 l6">
                        <input  id='sobrenome_administrador' type="text" name="sobrenome_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                        <label for="sobrenome_administrador">Sobrenome do administrador</label>
                        </div>

                        
                        </div>

                        <div class="row">
                           <div class="input-field col s5 m4 l3">
                          <input  id='senha_administrador' type="text" name="senha_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha_administrador">Senha</label>
                          </div>

                           <div class="input-field col s7 m8 l9">
                          <input  id='senha2_administrador' type="text" name="senha2_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha2_administrador">Confirmar senha</label>
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="input-field col s5 m5 l5">
                          <input  id='rg_administrador' type="text" name="rg_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                          <label for="rg_administrador">RG</label>
                          </div>

                          <div class="input-field col s5 m4 l5">
                          <input  id='cpf_administrador' type="text" name="cpf_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                          <label for="cpf_administrador">CPF</label>
                          </div>

                           <div class="input-field col s2 m3 l2">
                          <input  id='idade_administrador' type="number" name="idade_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00000000000');" >
                          <label for="idade_administrador">Idade</label>
                          </div>

                        </div>

                        <div class="row">

                          <div class="input-field col s2 m2 l2">
                          <input  id='ddd_administrador' type="text" name="ddd_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00');" >
                          <label for="ddd_administrador">DDD</label>
                          </div>
                          
                          <div class="input-field col s5 m5 l5">
                          <input  id='celular_administrador' type="text" name="celular_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="celular_administrador">Celular</label>
                          </div>

                           <div class="input-field col s5 m5 l5">
                          <input  id='telefone_administrador' type="text" name="telefone_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="telefone_administrador">Telefone</label>
                          </div>

                        </div>

                          <div class="row">

                          <div class="input-field col s1 m1 l1">
                          <select  id='estado_administrador' name="estado_administrador" class="form-control" style="background:#DCDCDC;">
                            <?php
                            $sql_estado = 'select * from tb_estado';

                            $query_estado = $mysqli->query($sql_estado);

                            while ($row_estado = $query_estado->fetch_array()) {
                              echo utf8_encode('<option value="'.$row_estado['cd_estado'].'">'.$row_estado['nm_estado'].'</option>');
                            }

                            ?>
                          </select>
                          </div>
                          
                          <div class="input-field col s3 m4 l4">
                          <input  id='cidade_administrador' type="text" name="cidade_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="cidade_administrador">Cidade</label>
                          </div>

                           <div class="input-field col s3 m4 l4">
                          <input  id='bairro_administrador' type="text" name="bairro_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="bairro_administrador">Bairro</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <input  id='complemento_administrador' type="text" name="complemento_administrador" class="form-control" style="background:#DCDCDC;" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="complemento_administrador">Complemento</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <select  id='sexo' name="sexo_administrador" class="form-control" style="background: #DCDCDC;">
                          <label for="sexo">sexo</label>

                              <?php 

                                $sql_sexo = 'select * from tb_sexo';

                                $query_sexo = $mysqli->query($sql_sexo);

                                while ($row_sexo = $query_sexo->fetch_array()) {
                                  
                                  echo '<option value='.$row_sexo['cd_sexo'].'>'.$row_sexo['ds_sexo'].'</option>';

                                }

                              ?>

                          </select>
                          </div>

                          

                        </div>


                        <div class="row">
                        
                        <div class="input-field col s12 m12 l12">

                             <div class='col s8 m8 l8'>
                             <div class="file-field input-field" style="background: #DCDCDC;">
                                  <div class="btn">
                                    <span>Carregar arquivo</span>
                                    <input type="file" name='foto_administrador' id='foto_administrador' style="background: #DCDCDC;">
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col s1 m1 l1">
                                <button class="btn btn-floating teal darken-4" id='mandar_administrador' name='mandar_administrador'>
                                    <i class="material-icons right">send</i>   
                                </button>
                              </div>
                              
                    </div>

                  </div></form></div></form>