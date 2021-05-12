<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Alunos</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


              <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Dados Pessoais </h2>
            
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form>
                  
                      <div class="row">
                            <div class="col-md-6 col-sm-12  form-group">
                              <input type="text" placeholder="Nome Completo (*)" class="form-control">
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12  form-group">
                              <select name="genero" id="genero" class="form-control">
                                  <option value="">Gênero</option>
                                  <option value="Curso 1">Masculino</option>
                                  <option value="Curso 2">Feminino</option>
                                  
                              </select>
                            </div>
                             <div class="col-md-3 col-sm-12  form-group">
                             <input id="publicacao" class="date-picker form-control" placeholder="Data de Nascimento" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                            <script>
                              function timeFunctionLong(input) {
                                setTimeout(function() {
                                  input.type = 'text';
                                }, 60000);
                              }
                            </script>
                            </div>
                             <div class="col-md-3 col-sm-12  form-group">
                              <input type="text" placeholder="RG" class="form-control">
                            </div>
                             <div class="col-md-3 col-sm-12  form-group">
                              <input type="text" placeholder="CPF" class="form-control">
                            </div>
                             <div class="col-md-3 col-sm-12  form-group">
                              <input type="text" placeholder="Celular" class="form-control">
                            </div>
                      </div>

                      <div class="x_title">
                        <h2>Localização </h2>
                  
                        <div class="clearfix"></div>
                      </div>

                      <div class="row">
                           <div class="col-md-6 col-sm-12  form-group">
                          <input type="text" placeholder="Endereço" class="form-control">
                        </div>
                         <div class="col-md-6 col-sm-12  form-group">
                          <input type="text" placeholder="Bairro" class="form-control">
                        </div>

                        <div class="col-md-3 col-sm-12  form-group">
                          <input type="text" placeholder="CEP" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-12  form-group">
                          <input type="text" placeholder="Cidade" class="form-control">
                        </div>
                        <div class="col-md-1 col-sm-12  form-group">
                          <input type="text" placeholder="UF" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12  form-group">
                          <input type="text" placeholder="Número" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-12  form-group">
                          <input type="text" placeholder="Complemento" class="form-control">
                        </div>
                      </div><!--.row-->


                      <div class="x_title">
                        <h2>Cursos </h2>
                  
                        <div class="clearfix"></div>
                      </div>
                      <button id="button" class="btn btn-info" onlick="duplicate()">+ Novo Curso</button>
                      <div class="row" id="duplicater">

                        <div class="col-md-6 col-sm-12  form-group">
                          <select name="cursos" id="cursos" class="form-control">
                                <option value="">Selecione o curso</option>
                                <option value="Curso 1">Curso 1</option>
                                <option value="Curso 2">Curso 2</option>
                                <option value="Curso 3">Curso 3</option>
                            </select>
                          
                        </div>
                         <div class="col-md-6 col-sm-12  form-group">
                            <label>
                              <input type="checkbox" class="js-switch" checked /> Aluno fez o pagamento?
                            </label>
                        </div>
                        <div class="col-sm-12  form-group">
                            <textarea class="resizable_textarea form-control" placeholder="Observações adicionais..."></textarea>
                        </div>
                      </div><!--.row-->


                      <div class="row">
                        <div class="col-sm-12  form-group">
                          <button type="button" class="btn btn-dark">Salvar</button>
                        </div>
                      </div>



                  </form>



              
                </div>
              </div>
            </div>
          </div> <!--.row-->



         

        

        


         

          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>