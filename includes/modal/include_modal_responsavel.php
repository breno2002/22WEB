
        
                    <p>
                        
                        <div class="row">
                        <div class="input-field col s8 m7 l6">
                        <input style="background: #DCDCDC;" id='nome_responsavel' type="text" name="nome_responsavel" class="form-control">
                        <label for="nome_responsavel">Nome do responsavel</label>
                        </div>

                        <div class="input-field col s4 m5 l6">
                        <input style="background: #DCDCDC;" id='sobrenome_responsavel' type="text" name="sobrenome_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                        <label for="sobrenome_responsavel">Sobrenome do responsavel</label>
                        </div>

                        
                        </div>

                        <div class="row">
                           <div class="input-field col s5 m4 l3">
                          <input style="background: #DCDCDC;" id='senha_responsavel' type="text" name="senha_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha_responsavel">Senha</label>
                          </div>

                           <div class="input-field col s5 m4 l3">
                          <input style="background: #DCDCDC;" id='senha2_responsavel' type="text" name="senha2_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                          <label for="senha2_responsavel">Confirmar senha</label>
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="input-field col s5 m4 l3">
                          <input style="background: #DCDCDC;" id='rg_responsavel' type="text" name="rg_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                          <label for="rg_responsavel">RG</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <input style="background: #DCDCDC;" id='cpf_responsavel' type="text" name="cpf_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                          <label for="cpf_responsavel">CPF</label>
                          </div>

                           <div class="input-field col s3 m3 l3">
                          <input style="background: #DCDCDC;" id='idade_responsavel' type="number" name="idade_responsavel" class="form-control" onkeypress="$(this).mask('00000000000');" >
                          <label for="idade_responsavel">Idade</label>
                          </div>

                        </div>

                        <div class="row">

                          <div class="input-field col s1 m1 l1">
                          <input style="background: #DCDCDC;" id='ddd_responsavel' type="text" name="ddd_responsavel" class="form-control" onkeypress="$(this).mask('00');" >
                          <label for="ddd_responsavel">DDD</label>
                          </div>
                          
                          <div class="input-field col s3 m4 l5">
                          <input style="background: #DCDCDC;" id='celular_responsavel' type="text" name="celular_responsavel" class="form-control" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="celular_responsavel">Celular</label>
                          </div>

                           <div class="input-field col s3 m4 l5">
                          <input style="background: #DCDCDC;" id='telefone_responsavel' type="text" name="telefone_responsavel" class="form-control" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="telefone_responsavel">Telefone</label>
                          </div>

                        </div>

                          <div class="row">

                          <div class="input-field col s4 m5 l5">
                          <select style="background: #DCDCDC;" id='estado_responsavel' name="estado_responsavel" class="form-control" >
                          
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
                          <input style="background: #DCDCDC;" id='cidade_responsavel' type="text" name="cidade_responsavel" class="form-control" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="cidade_responsavel">Cidade</label>
                          </div>

                           <div class="input-field col s3 m4 l4">
                          <input style="background: #DCDCDC;" id='bairro_responsavel' type="text" name="bairro_responsavel" class="form-control" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="bairro_responsavel">Bairro</label>
                          </div>

                          <div class="input-field col s3 m3 l3">
                          <input style="background: #DCDCDC;" id='complemento_responsavel' type="text" name="complemento_responsavel" class="form-control" onkeypress="$(this).mask('00 00000 0000');" >
                          <label for="complemento_responsavel">Complemento</label>
                          </div>

                        </div>


                        <div class="row">
                        
                        <div class="input-field col s10 m10 l10">


                           <div class="form-control" style="background: #DCDCDC;">
                                    <span>Carregar arquivo</span>
                                    <input type="file" name='foto_responsavel' id='foto' style="background: #DCDCDC;">
                                  </div>
                        </div>

                        <div class="input-field col s2 m2 l2">
                          <select style="background: #DCDCDC;" id='sexo_responsavel' name="sexo_responsavel" class="form-control" >
                          
                            <option value=0> Homem </option>
                            <option value=1> Mulher </option>


                          </select>
                          </div>

                        </div>

                        <br>

                      </p>