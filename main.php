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
                <div class="col-sm-1"></div>               
                <div class="col-sm-2 cardRanking center" >
                    <h4> Instituições bem avaliados</h4>
                    <ul>
                        <li> 
                            <b> - Instiuicao 1 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li>
                            <b> - Instiuicao 2 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li>
                            <b> - Instiuicao 3 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                    <span>
                        <button class='btn btn-info btn-sm'> Ver Mais </button>
                    </span>
                </div>  
                <div class="col-sm-2 cardRanking center">
                     <h4> Instituições mal avaliados</h4>
                     <ul>
                        <li> <b> - Instiuicao 1 </b></li>
                        <li> <b> - Instiuicao 2 </b></li>
                        <li> <b> - Instiuicao 3 </b></li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                </div>              
                <div class="col-sm-2 cardRanking center">
                     <h4> Instituições mais procuradas</h4>
                     <ul>
                        <li> <b> - Instiuicao 1 </b></li>
                        <li> <b> - Instiuicao 2 </b></li>
                        <li> <b> - Instiuicao 3 </b></li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                </div>  
                <div class="col-sm-2 cardRanking center">
                     <h4> Termos mais utilizados</h4>
                     <ul>
                        <li> <b> - Hospital e Saúde </b></li>
                        <li> <b> - Hospital Porto Alegre </b></li>
                        <li> <b> - dfdsfs </b></li>
                        <li> <b> - Lorem Ipsum  </b></li>
                        <li> <b> - tatatatataatat </b></li>
                    </ul>
                </div>  
                <div class="col-sm-1" ></div>
            </div>            
            <div class="col-sm-1" ></div>		    
		</div>
	</div>