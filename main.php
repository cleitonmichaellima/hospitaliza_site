<div  class='row center'>
		<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal">
			<a class="navbar-brand" href='#!/'>
				<img src="img/logo_hospitaliza.png" width="15%" style='float:left;'>
			</a>
			<span ng-controller="navController">
                <span class="form-inline" ng-if='!usuarioLogado'>
                    <button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
                    <button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
                </span>
                <span class="form-inline" ng-if='usuarioLogado' >     
                 <div class="btn-group">
                  <button type="button" class="btn btn-info">
                      <i class="fa fa-user"></i> 
                      {{nomeUsuario}}
                  </button>
                  <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#!/usuario/{{id_usuario}}" style='cursor:pointer;'>Dados Pessoais</a>             
                    <div class="dropdown-divider"></div>
                    <a style='cursor:pointer;' class="dropdown-item" data-toggle="modal" data-target="#modalFinalizarSessao"><i class='fa fa-power-off'></i> Sair</a>
                  </div>
                </div>
                </span>
            </span>
		</nav>
		<div class="jumbotron col col-sm-12 jumbPrincipal" >
			<h3 class="display-4 textJumbPrincipal">Digite o nome do hospital</h3>
			<div class='row'>
				<div class='col col-sm-3'>
				</div>
				<div class='col col-sm-5'>
					<input id="barraProcurarInicial" ng-model="novoTermo" type="text" class='form-control'>
				</div>
				<div class='col col-sm-2'>
				    <a href='#!/search/{{novoTermo}}'>
					<button class='btn btn-primary btn-lg' id="btnProcurarInicial" ng-class="{'disabled': !novoTermo}"> Procurar </button>
                    </a>
				</div>
				<div class='col col-sm-2'>
				</div>
			</div>
		</div>
		<div class="row col-sm-12">
            <div class='col-sm-12'>
                <center>
                    <h3>
                        Ranking de Instituições Cadastradas no Portal
                    </h3>
                </center>
            </div>
            <div class="col-sm-1"></div>
            <div class=" row col-sm-10" style='margin-top:20px;'>                              
                <div class="col-sm-3 cardRanking center"  style="font-size: 14px;">
                    <h4> Instituições bem avaliados</h4>
                    <hr>
                    <ul>                       
                        <li ng-repeat='melhorAvaliada in melhoresAvaliadas'> 
                            <a href="#!/instituicao/{{melhorAvaliada.id_instituicao}}">  
                                <b>{{melhorAvaliada.nome}}</b>
                            </a>   
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': melhorAvaliada.mediaNota>=2  }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': melhorAvaliada.mediaNota>=3 }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': melhorAvaliada.mediaNota>=4 }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': melhorAvaliada.mediaNota>=5 }" ></span>
                        </li>   
                                          
                    </ul>                    
                </div>  
                <div class="col-sm-3 cardRanking center" style='font-size: 14px;'>
                     <h4> Instituições mal avaliados</h4>
                     <hr>
                     <ul>                                       
                        <li ng-repeat='piorAvaliada in pioresAvaliadas' > 
                            <a href="#!/instituicao/{{piorAvaliada.id_instituicao}}">            
                                <b>{{piorAvaliada.nome}}</b>
                            </a>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': piorAvaliada.mediaNota>=2  }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': piorAvaliada.mediaNota>=3 }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': piorAvaliada.mediaNota>=4 }"></span>
                            <span class="fa fa-star" ng-class="{ 'checkedStar': piorAvaliada.mediaNota>=5 }" ></span>                        
                        </li>  
                    </ul>
                </div>              
                <div class="col-sm-3 cardRanking center" style='font-size: 14px;'>
                     <h4> Instituições mais indicadas</h4>
                     <hr>
                     <ul>
                        <li ng-repeat='maisIndicada in maisIndicadas' > 
                            <a href="#!/instituicao/{{maisIndicada.id_instituicao}}">
                                <b>{{maisIndicada.nome}}</b>
                            </a>
                            <br>
                            <div class="progress" style="height: 5px;width: {{maisIndicada.indicados}}0%;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{maisIndicada.indicados}}
                        </li>
                    </ul>
                </div>                
            </div>            
            <div class="col-sm-1" ></div>		    
		</div>
	</div>