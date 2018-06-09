	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row'>
	    <div class='col-sm-2'></div>
	    <div class='col-sm-2 card' style='padding: 50px;'>
	      <h5> Instituições</h5>
	      Hospital Santa Casa
	      Hospital Santo Antonio	      
	    </div>
	    <div class='row col-sm-6' >
	       <div class='col-sm-12 card' style='padding: 50px;height:200px;'>
	           Você pesquisou pelo termo:
	           <h3>{{termoMostrar}} </h3>	           
	       </div>
	       <div class='row col-sm-12' ng-if='avaliacaoEncotrada.length>0'>
	           <div class='row col-sm-12' style="margin-top:20px;font-size:13px;">	               
	               <div class='col-sm-3' ng-click="showTodos()" >Filtre por: Todos ({{avaliacaoTodosResultados.length}}) </div>
	               <div class='col-sm-3' ng-click="showPositivas()">Avaliação Positiva ({{avaliacaoPositiva.length}})</div>
                   <div class='col-sm-3' ng-click="showNegativas()" >Avaliação Negativa ({{avaliacaoNegativa.length}})</div>
                   <div class='col-sm-3' ng-click="showIndicacao()" >Indicação ({{avaliacaoIndicacao.length}})</div>                   
	           </div>	         
                <div class='col-sm-12 card cardRanking'  ng-repeat="avaliacao in avaliacaoEncotrada" style='padding: 15px;margin-top:10px;'>   
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
	       <div class='col-sm-12' ng-if='!avaliacaoEncotrada'>	                 
               <center>
                   <img  style='width:20%' src='https://camo.githubusercontent.com/a1a81b0529517027d364ee8432cf9a8bd309542a/687474703a2f2f692e696d6775722e636f6d2f56446449444f522e676966'>
               </center>
	       </div>
	       <div class='row col-sm-12' ng-if='avaliacaoEncotrada==1'>
	           <h6> Não foram encontrados resultados para essa pesquisa</h6>
	       </div>
	    </div>
	   <div class='col-sm-2'></div>
	</div>        