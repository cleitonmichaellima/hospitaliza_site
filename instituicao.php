	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal">
			<a class="navbar-brand logo">
				<img src="img/logo_hospitaliza.png" width="50%" style='float:left;'>
			</a>
			<span class="form-inline">			
				<input id="barraProcurarNav" type="text" class='form-control'>				
				<button class='btn btn-primary btn-sm' id="btnProcurarNav"> Procurar </button>			
			</span>
			<span class="form-inline">
				<button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
				<button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
			</span>
		</nav>		
	</div>
	<div class='row' ng-controller='instituicaoController'>
	    <div class='col-sm-2'></div>
        <div class='col-sm-8' style='margin-top: 50px;'> <!-- caixa com as informações da instituicao-->
            <div class='cardRanking' style='padding: 20px;'>
                <div class='col-sm-12'>
                    <h2> {{instituicao.nome}}</h2>
                </div>
                <div class='row col-sm-12'>
                    <div class='col-sm-8'>
                       Resumo da instituicao <br>
                       Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impresso
                    </div>
                    <div class='col-sm-4'>
                        Numero de visualizações <br>
                        <p style='font-size:20px'>12</p>
                    </div>           
                </div>
                <div class='row col-sm-12' style='margin-top: 50px;'>
                    <div class='col-sm-3'>
                        <p style="margin-bottom: -20px;">Média de Notas</p>
                        <p style='font-size:60px;'>4.5</p>
                    </div>
                    <div class='row col-sm-9' style='background:gray;color:#fff;'>
                      <h1 style='margin:auto;'>LOCALIZAÇÃO</h1>
                    </div>           
                </div>
                <div class='row col-sm-12' style='margin-top: 50px;'>
                    <div class='col-sm-3'>
                       <h5>Total de Avaliações</h5>
                       <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Avaliações Positivas</h5>
                       <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Avaliações Negativas</h5>
                       <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                        <h5>Indicaram o lugar</h5>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>                 
                </div>
            </div>
            <div class="row col-sm-12" style="margin-top: 50px;">
                  <button style="margin: auto;" class="btn btn-outline-success btn-lg" data-target="#modalAvaliar" data-toggle="modal"> Avaliar Instituição </button>
            </div>
            <div class='row col-sm-12'>
                <h4> Avaliações de Usuários</h4>
            </div>
            <div class='row col-sm-12'>
               <div class="row col-sm-12" ng-repeat="avaliacao in avaliacoesInstituicao">
                   <div class='col-sm-10 card cardRanking' style='padding: 20px;margin-bottom: 5px;'>   
                       <a href='#!/avaliacao/{{avaliacao.id_avaliacao}}'><h5>{{avaliacao.titulo}}</h5></a>  
                       {{avaliacao.descricao}}   
                   </div>                 
              </div>             
            </div>           
        </div>
         <div class='col-sm-2'></div>         
</div>
	    
	    	  


