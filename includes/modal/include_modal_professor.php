<form method="post" enctype="multipart/form-data" name='professor'>
                    
                    <p>
                      <form method='post' enctype="multipart/form-data">
                        
                        <div class="row">
                        <div class="input-field col s8 m7 l6">
                        <input  id='nome' type="text" name="nome_professor" class="form-control" style="background:#DCDCDC">
                        <label for="nome">Nome do professor</label>
                        </div>

                        <div class="input-field col s4 m5 l6">
                        <input  id='sobrenome' type="text" name="sobrenome_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                        <label for="sobrenome">Sobrenome do professor</label>
                        </div>

                        
                        </div>

                        <div class="row">
                           <div class="input-field col s5 m4 l3">
                          <input  id='senha_professor' type="text" name="senha_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha_professor">Senha</label>
                          </div>

                           <div class="input-field col s7 m8 l9">
                          <input  id='senha2_professor' type="text" name="senha2_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha2_professor">Confirmar senha</label>
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="input-field col s5 m5 l5">
                          <input  id='rg_professor' type="text" name="rg_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                          <label for="rg_professor">RG</label>
                          </div>

                          <div class="input-field col s5 m4 l5">
                          <input  id='cpf_professor' type="text" name="cpf_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                          <label for="cpf_professor">CPF</label>
                          </div>

                           <div class="input-field col s2 m3 l2">
                          <input  id='idade_professor' type="number" name="idade_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00000000000');" >
                          <label for="idade_professor">Idade</label>
                          </div>

                        </div>

                        <div class="row">

                          <div class="input-field col s2 m2 l2">
                          <input  id='ddd_professor' type="text" name="ddd_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00');" >
                          <label for="ddd_professor">DDD</label>
                          </div>
                          
                          <div class="input-field col s5 m5 l5">
                          <input  id='celular_professor' type="text" name="celular_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="celular_professor">celular</label>
                          </div>

                           <div class="input-field col s5 m5 l5">
                          <input  id='telefone_professor' type="text" name="telefone_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="telefone_professor">telefone</label>
                          </div>

                        </div>

                          <div class="row">

                          <div class="input-field col s1 m1 l1">
                          
                          <select  id='estado_professor' name="estado_professor" class="form-control" style="background:#DCDCDC">
                          
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
                          <input  id='cidade_professor' type="text" name="cidade_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="cidade_professor">Cidade</label>
                          </div>

                           <div class="input-field col s3 m4 l4">
                          <input  id='bairro_professor' type="text" name="bairro_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="bairro_professor">Bairro</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <input  id='complemento_professor' type="text" name="complemento_professor" class="form-control" style="background:#DCDCDC" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="complemento_professor">Complemento</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <select  id='sexo' name="sexo_professor" class="form-control" style="background: #DCDCDC;">
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

                          <div class="input-field col s3 m3 l3">
                          <select  id='atividade' name="atividade" class="form-control" style="background: #DCDCDC;">
                          <label for="atividade">Atividade</label>

                              <option value="0">Inativo</option>
                              <option value="1">Ativo</option>


                          </select>
                          </div>

                          <div class='col s5 m5 l5'>
                             <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Carregar arquivo</span>
                                    <input type="file" name='foto_professor' id='foto_professor'>
                                  </div>
                                </div>
                          </div>

                          <br>

                          <div class="input-field col s4 m4 l4">
                        <select  id='materia_professor_id' name="materia_professor" class="form-control" style="background:#DCDCDC">
                        <label for="materia_professor_id">Matéria</label>

                        <?php 

                        $sql_mat = 'select * from tb_materia';
                        $query_mat = $mysqli->query($sql_mat);

                        while ($row_mat = $query_mat->fetch_array()){
                          echo utf8_encode("<option value=".$row_mat['cd_materia'].">".$row_mat['nm_materia']."</option>");
                        }

                        ?>

                      </select>
                        </div>
                          
                          <div class="col s1 m1 l1">
                                <button class="btn btn-floating teal darken-4" id='mandar_professor' value='mandar_professor' name="mandar_professor">
                                    <i class="material-icons right">send</i>   
                                </button>
                              </div>

                          </div>
                        </div></form></p></form>