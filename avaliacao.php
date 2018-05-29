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
	<div class='row' ng-controller="avaliacaoController">
	    <div class='col-sm-2'></div>
	    <div class='row col-sm-6 cardRanking' style='margin-top:50px'>
            <div class='col-sm-12'>
                <h2>{{avaliacao.titulo}}</h2>
            </div>
            <div class='col-sm-3'>
                <p style="margin-bottom: -20px;">Nota</p>
                <p style='font-size:60px;'>{{avaliacao.nota}}</p>
            </div>
            <div class='row col-sm-9'>
                {{avaliacao.descricao}}
            </div>   
	    </div>
	    <div class='col-sm-2 card' style='padding-top: 50px !important;padding:30px;'>
	       <a href='#!/instituicao/{{avaliacao.id_instituicao}}'><h5> Hospital Santa Casa</h5></a>
	        <div>
               <h6>Avaliações Positivas</h6>
               <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div> 
            <div>
               <h6>Avaliações Negativas</h6>
               <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div> 
            <div>
                <h6>Indicaram o lugar</h6>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> 
            <div  style="margin-top: 20px;">
              <button style="margin: auto;" class="btn btn-outline-success " data-target="#modalAvaliar" data-toggle="modal"> Avaliar Instituição </button>
            </div>
	    </div>
	    <div class='col-sm-2'></div>
	</div>        