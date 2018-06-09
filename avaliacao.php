	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row' ng-controller="avaliacaoController">
	    <div class='col-sm-2'></div>
	    <div class='row col-sm-6 cardRanking' style='margin-top:50px'>
            <div class='col-sm-12'>
                <h2>{{avaliacao.titulo}}</h2>
                <hr>
            </div>
            <div class='col-sm-3' style='margin-top:-30px;'>
                <p style="margin-bottom: -20px;">Nota</p>
                <p style='font-size:60px;'>{{avaliacao.nota}}</p>
            </div>
            <div class='row col-sm-9' style='margin-top:-30px;'>
                {{avaliacao.descricao}}
            </div>   
	    </div>
	    <div class='col-sm-2 card' style='padding-top: 50px !important;padding:30px;'>
	       <a href='#!/instituicao/{{avaliacao.id_instituicao}}'><h6>{{instituicaoAvaliacao.nome}}</h6></a>
	           <hr style='margin-top:-5px;'>
	        <div>
              <h6>Avaliações Positivas</h6>
               <div class="progress" style="height: 5px;width: 80%;">
                  <div class="progress-bar bg-info" role="progressbar" style="width:100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
                   <h6>{{variaveisInstituicao.totalPositiva}}</h6>
            </div> 
            <div >
               <h6>Avaliações Negativas</h6>
               <div class="progress" style="height: 5px;width: 80%;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <h6>{{variaveisInstituicao.totalNegativa}}</h6>
            </div> 
            <div>
                <h6>Indicaram o lugar</h6>
                <div class="progress" style="height: 5px;width: 80%;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6>{{variaveisInstituicao.totalIndicam }}</h6>
            </div>           
            <div  style="margin-top: 20px;">
              <button style="margin: auto;" class="btn btn-outline-success " data-target="#modalAvaliar" data-toggle="modal"> Avaliar Instituição </button>
            </div>
	    </div>
	    <div class='col-sm-2'></div>
	</div>        