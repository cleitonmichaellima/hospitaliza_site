	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
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
                        <p style='font-size:60px;'>{{instituicao.mediaNota}}</p>  
                    </div>
                    <div class='row col-sm-9' style='background:gray;color:#fff;'>
                      <h1 style='margin:auto;'>LOCALIZAÇÃO</h1>
                    </div>           
                </div>
                <div class='row col-sm-12' style='margin-top: 50px;'>
                    <div class='col-sm-3'>
                       <h5>Total de Avaliações</h5>
                       <div class="progress" style="height: 5px;width: 80%;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                       <h6>{{instituicao.totalAvaliacao}}</h6>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Avaliações Positivas</h5>
                       <div class="progress" style="height: 5px;width: 80%;">
                          <div class="progress-bar bg-info" role="progressbar" style="width:100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                       <h6>{{instituicao.totalPositiva}}</h6>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Avaliações Negativas</h5>
                       <div class="progress" style="height: 5px;width: 80%;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                       <h6>{{instituicao.totalNegativa}}</h6>
                    </div> 
                    <div class='col-sm-3'>
                        <h5>Indicaram o lugar</h5>
                        <div class="progress" style="height: 5px;width: 80%;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>{{instituicao.totalIndicam }}</h6>
                    </div>                 
                </div>
            </div>
            <div class="row col-sm-12" style="margin-top: 50px;">
                  <button style="margin: auto;" class="btn btn-outline-success btn-lg" data-target="#modalAvaliar" ng-click="setInstituicao()" data-toggle="modal"> Avaliar Instituição </button>
            </div>
            <div class='row col-sm-12'>
                <h4> Avaliações de Usuários</h4>
            </div>
            <div class='row col-sm-12' style="margin-top:20px;font-size:13px;">	               
	               <div class='col-sm-3' ng-click="showTodosInstituicao()" >
	                   Filtre por: 
	                   <button class='btn btn-outline-primary btn-sm'>  Todos ({{avaliacaoTodosResultadosInstituicao.length}})</button>
	               </div>
	               <div class='col-sm-3' ng-click="showPositivasInstituicao()">
                      <button class='btn btn-outline-primary btn-sm'>Avaliação Positiva ({{avaliacaoPositivaInstituicao.length}})</button>
                   </div>
                   <div class='col-sm-3' ng-click="showNegativasInstituicao()" >
                       <button class='btn btn-outline-primary btn-sm'>Avaliação Negativa ({{avaliacaoNegativaInstituicao.length}})</button>
                   </div>
                   <div class='col-sm-3' ng-click="showIndicacaoInstituicao()" >
                       <button class='btn btn-outline-primary btn-sm'>Indicação ({{avaliacaoIndicacaoInstituicao.length}})</button>
                   </div>                   
	           </div>	
            <div class='row col-sm-12'>              
              <div class='col-sm-12 card cardRanking'  ng-repeat="avaliacao in avaliacoesInstituicao" style='padding: 15px;margin-top:10px;'>   
                    <div style='display:inline;'>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star" ng-class="{ 'checkedStar': avaliacao.nota>=2  }"></span>
                        <span class="fa fa-star" ng-class="{ 'checkedStar': avaliacao.nota>=3 }"></span>
                        <span class="fa fa-star" ng-class="{ 'checkedStar': avaliacao.nota>=4 }"></span>
                        <span class="fa fa-star" ng-class="{ 'checkedStar': avaliacao.nota>=5 }" ></span>
                    </div>
                    <h5 style='display:inline;'>
                      <a href='#!/avaliacao/{{avaliacao.id_avaliacao}}'>
                       {{avaliacao.titulo}}
                      </a>
                     </h5> 
                   <a href='#!/instituicao/{{avaliacao.id_instituicao}}'>
                       <i>{{avaliacao.nome}}</i>
                    </a>
                   {{avaliacao.data}}<br>
                    {{avaliacao.descricao}}         
               </div>                         
            </div>           
        </div>
         <div class='col-sm-2'></div>         
</div>
	    
	    	  


