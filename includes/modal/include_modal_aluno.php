                  <div class="card-content">
                   
                     <p>
                        
                        <div class="row">
                        <div class="input-field col s8 m7 l6">
                        <input  id='nome' type="text" name="nome_aluno" class="form-control" style="background: #DCDCDC;">
                        <label for="nome">Nome do Aluno</label>
                        </div>

                        <div class="input-field col s4 m5 l6">
                        <input  id='sobrenome' type="text" name="sobrenome_aluno" class="form-control" style="background: #DCDCDC;">
                        <label for="sobrenome">Sobrenome</label>
                        </div>

                        
                        </div>

                        <div class="row">
                          
                          <div class="input-field col s8 m7 l6">
                          <input  id='rg' type="text" name="rg_aluno" class="form-control" style="background: #DCDCDC;">
                          <label for="rg">RG</label>
                          </div>
                          
                          <div class="input-field col s4 m5 l6">
                          <input  id='telefone' type="text" name="telefone_aluno" class="form-control" style="background: #DCDCDC;">
                          <label for="telefone">telefone</label>
                          </div>

                        </div>



                        <div class="row">
                        
                        <div class="input-field col s12 m12 l12">

                          <div class="input-field col s8 m7 l6">
                          <select id='turma' name="turma_aluno" class="form-control" style="background: #DCDCDC;" placeholder='turma'>

                            <?php 

                              $sql_turma =' select * from tb_turma';

                              $select_turma = $mysqli->query($sql_turma);
                              while($row_turma = $select_turma->fetch_array()){

                                echo utf8_encode('<option value = '.$row_turma['cd_turma'].'>'.$row_turma['ds_turma'].'</option>');
                              }

                            ?>

                          </select>
                          </div>
                          
                        </div>

                        </div>

                        <br>



                        <div class="row">
                        
                        <div class="input-field col s12 m12 l12">

                          <div class="input-field col s8 m7 l6">
                          <select  id='sexo' name="sexo_aluno" class="form-control" style="background: #DCDCDC;">
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
                          <br>

                          <div class="input-field col s4 m5 l6">
                          <input  id='idade' type="number" name="idade_aluno" class="form-control" style="background: #DCDCDC;" placeholder="idade">
                          </div>

                          <br>
                          
                        </div>

                        </div>

                        <div class="row">
                        
                        <div class="input-field col s12 m12 l12">

                          <div class="input-field col s4 m5 l6">

                          <select  id='sozinho_aluno' name="sozinho_aluno" class="form-control" style="background: #DCDCDC;">
                            <?php 

                            $sql_alone = 'select * from tb_autorizacao';

                            $query_alone = $mysqli->query($sql_alone);

                            while ($row_alone = $query_alone->fetch_array()) {

                              if ($row_alone['ds_status'] == 1) {
                                echo utf8_encode('<option value="'.$row_alone['cd_autorizacao'].'"> Autorizado </option>');
                              }

                              else{

                                echo '<option value="'.$row_alone['cd_autorizacao'].'"> Não autorizado </option>';
                                
                            }}

                            ?>
                              }

                          </select>
                          </div>

                          <br>
                        
                          <div class="col s4 m4 l4">

                                  <div class="form-control" style="background: #DCDCDC;">
                                    <span>Carregar arquivo</span>
                                    <input type="file" name='foto_aluno' id='foto' style="background: #DCDCDC;">
                                  </div>

                                  <br>

                                  <br>

                                <button class="btn btn-floating teal darken-4" id='aluno' name="mandar" style="background: #DCDCDC;">
                                    <i class="material-icons right">send</i>   
                                </button>
                              </div>
                          
                        </div>

                        </div>

                              
                      </p>
                  </div>

<script>
  
            $(document).ready(function(){

            $('select').formSelect();
          });

  </script>
       
