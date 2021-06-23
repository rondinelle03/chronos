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
                            <div class="col-sm-12  form-group">
                              <input type="text" placeholder="Nome do Curso" class="form-control">
                            </div>                           
   
                      </div>
                      <div class="row">
                            <div class="col-sm-12  form-group">
                              <input type="text" placeholder="Link do valor do curso" class="form-control">
                            </div>                           
   
                      </div>
                      <div class="row">
                             <div class="col-sm-12  form-group">
                            <textarea class="resizable_textarea form-control" placeholder="Descrição do Curso"></textarea>
                        </div>                           
   
                      </div>

                     
                      


                      <div class="x_title">
                        <h2>Vídeos </h2>
                  
                        <div class="clearfix"></div>
                      </div>
                      <button id="button" class="btn btn-info" onlick="duplicate()">+ Novo Vídeo</button>
                      <div class="row" id="duplicater">

                        
                         
                        <div class="col-sm-12  form-group">
                            <input type="text" placeholder="Link do vídeo" class="form-control">
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