<div  class='row center'>
		<?php  require "navbar.php" ?>
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
					<button class='btn btn-primary btn-lg' id="btnProcurarInicial"> Procurar </button>
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
            <div class=" row col-sm-10">                              
                <div class="col-sm-3 cardRanking center"  style="font-size: 14px;">
                    <h4> Instituições bem avaliados</h4>
                    <hr>
                    <ul>
                        <li ng-repeat='melhorAvaliada in melhoresAvaliadas'> 
                            <b>{{melhorAvaliada.nome}}</b>
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
                            <b>{{piorAvaliada.nome}}</b>
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
                            <b>{{maisIndicada.nome}}</b>
                            <br>
                            <div class="progress" style="height: 5px;width: 80%;">
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