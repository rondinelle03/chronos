<?php include '_header.php' ?>
    <section class="topo-cliente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10"><a onclick="openNav()" class="mnnav"><i class="fa fa-bars"></i></a> Olá, Luciana Almeida Rodrigues</div>
                <div class="col-2"><a href="" class="text-end"><i class="fa fa-comments"></i></a></div>
            </div>
        </div>
    </section>
    <section class="destaque-cliente">
        <img src="imgs/destaque-aspect-ratio-1920x620.jpg" class="img-fluid">
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="center"><img src="../images/MedimagemNova.svg" width="250"></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
       
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="accordion" id="accordionPaciente">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-users"></i> Pacientes
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionPaciente">
                          <div class="card-body">
                            <ul>
                                <li><a href="">Listar pacientes</a></li> 
                                <li><a href="">Cadastrar pacientes </a></li>
                                <li><a href="">Deletar pacientes </a></li>
                                <li><a href="">Atualizar dados cadastrais</a></li>
                            </ul> 
                          </div>
                        </div>
                      </div>
                
                    </div><!-- #accordionPaciente-->
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="accordion" id="accordionExames">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOneExame"  aria-expanded="false" aria-controls="collapseOneExame">
                             <i class="fa fa-flask" aria-hidden="true"></i> Exames / requisições
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOneExame" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExames">
                          <div class="card-body">
                            <ul>
                                <li><a href="">Solicitar </a></li> 
                                <li><a href="">Listar  </a></li>
                                <li><a href="guia-agendamento.php" target="_blank">Resultados / laudos</a></li>
                               
                            </ul> 
                          </div>
                        </div>
                      </div>
                
                    </div><!-- #accordionExames-->
                </div>

                <div class="col-md-3 col-sm-12">

                    <div class="accordion" id="accordionAgendamentos">
                      <div class="card">
                        <div class="card-header" id="headingOneAgenda">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOneAgenda"  aria-expanded="false" aria-controls="collapseOneAgenda">
                              <i class="fa fa-calendar" aria-hidden="true"></i> Agendamentos
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOneAgenda" class="collapse " aria-labelledby="headingOneAgenda" data-parent="#accordionAgendamentos">
                          <div class="card-body">
                            <ul>
                                <li><a href="">Listar agendamentos </a></li> 
                                <li><a href="">Agendamentos confirmados </a></li>
                               
                            </ul> 
                          </div>
                        </div>
                      </div>
                
                    </div><!-- #accordionAgendamentos-->

                </div>

                <div class="col-md-3 col-sm-12">
                     <div class="accordion" id="accordionFinanceiro">
                      <div class="card">
                        <div class="card-header" id="headingOneFinanceiro">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOneFinanceiro"  aria-expanded="false" aria-controls="collapseOneFinanceiro">
                             <i class="fa fa-bar-chart" aria-hidden="true"></i> Financeiro / relatórios 
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOneFinanceiro" class="collapse " aria-labelledby="headingOneFinanceiro" data-parent="#accordionFinanceiro">
                          <div class="card-body">
                            <ul>
                                <li><a href="">Listar exames confirmados  </a></li> 
                                <li><a href="">Relatório de comissões a receber  </a></li>
                                <li><a href="">Relatório de comissões pagas </a></li>
                                <li><a href="">Relatório de comissões pendentes </a></li>

                               
                            </ul> 
                          </div>
                        </div>
                      </div>
                
                    </div><!-- #accordionFinanceiro-->
                </div>
            </div>
       
    </section>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Perfil</a>
      <a href="#">Mudar Senha</a>
      <a href="#">Sair</a>
     
    </div>


    <section class="rodape-fundo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p>©2021 Desenvovido pela Medimagem</p>
                </div>  
            </div>
        </div>
    </section>
 

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

 <?php include '_footer.php' ?>