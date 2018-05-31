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
	    <div class='row col-sm-5' >
	       <div class='col-sm-12 card' style='padding: 50px;height:200px;'>
	           Você pesquisou pelo termo:
	           <h3>{{termoMostrar}} </h3>	           
	       </div>
	       <div class='row col-sm-12'>
	           <div class='row col-sm-12' style="margin-top:20px;">	               
	               <div class='col-sm-3'>Filtre por: Todos</div>
	               <div class='col-sm-3'>Avaliação Positiva</div>
                   <div class='col-sm-3'>Avaliação Negativa</div>
                   <div class='col-sm-3'>Indicação</div>                   
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
	    </div>
	    <div class='col-sm-2 card' style='padding: 50px !important;padding:20px;'>
	      <h4> Melhores Avaliadas</h4>
	      <div>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
          </div>
	      <h5> Hospital Santa Casa</h5>
	      <div>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star"></span>
          </div>
	      <h5>Hospital Santo Antonio</h5>      
	    </div>
	    <div class='col-sm-2'></div>
	</div>        