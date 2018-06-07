	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row' ng-controller='usuarioController'>
	    <div class='col-sm-2'></div>
	    <div class='row col-sm-2 card' style='margin-top:50px;padding:20px;'>            
            Seja bem-vindo 
            <img src="https://www.flaticon.com/premium-icon/icons/svg/310/310767.svg" style="width: 30%;">
            <h6>{{nomeMostra}}</h6>
            <hr>         
            <a href="#!/instituicao/{{maisIndicada.id_instituicao}}"><li>Alterar Senha</li></a>
            <a href="#!/desativar/"><li>Deletar Conta</li></a>
           <li><button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalFinalizarSessao'>Sair</button></li>
            
	    </div>	   
	    <div class='row col-sm-6 cardRanking ' style='margin-top:50px;padding:20px;'>
            <div class='col-sm-12'>
                <h2>Dados Pessoais</h2>
            </div>
            
            <div class='row col-sm-12'>
                <div class='row col-sm-12' style='margin-bottom: 20px;'>                
                   <div class='col-sm-2'>
                       Nome:
                   </div>
                   <div class='col-sm-7'>
                       <input type='text' class='form-control' ng-model='user.nome'> 
                   </div>
                   <div class='col-sm-3'></div>
                </div>
                <br>
                <br>
               <div class='row col-sm-12' style='margin-bottom: 20px;'>                  
                   <div class='col-sm-2'>
                       Sexo:
                   </div>
                   <div class='col-sm-3'>                     
                    <li>
                        <input type='radio' ng-model='user.sexo' value='2'> Feminino
                    </li>
                    <li>
                        <input type='radio' ng-model='user.sexo' value='1' > Masculino
                    </li>
                   </div>
                   <div class='col-sm-2'>
                       Data de Nascimento:
                   </div>
                   <div class='col-sm-3' >
                       <input type='text' style="width: 90%;"  ng-model='user.data_nascimento' class='form-control'> 
                   </div>
                    <div class='col-sm-1'>                      
                   </div>
                </div> 
                <br>
                <br>
	           <div class='row col-sm-12' style='margin-bottom: 20px;'> 
                   <div class='col-sm-2'>
                       Telefone:
                   </div>
                   <div class='col-sm-2' >
                       <input type='text' style="width: 70%;" ng-model='user.dddtelefone' class='form-control'> 	            
                   </div>
                   <div class='col-sm-3'>
                       <input type='text' class='form-control' ng-model='user.telefone' > 	                
                   </div>
                   <div class='col-sm-4'></div>	   
                </div>   
                <div class='col-sm-12'>
                   <center>
                        <div style='width:80%' class="alert alert-{{atualizaStatus}} alert-dismissible fade show"  ng-if="msgAtualizaCadastro" role="alert">
                          {{msgAtualizaCadastro}}
                          <button type="button" class="close"  aria-label="Close" ng-click="hideAlert()">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    </center>
                </div>              
                 <div class='col-sm-12' style='margin-top:20px;'>
                    <center>
                        <button class='btn btn-info' style='margin:auto;' ng-click="atualizarDados()"> Atualizar Dados pessoais</button>
                    </center>
                </div>
	       </div>
            <div class='col-sm-12' style='margin-top:60px;'>
                <h2>Suas Avaliações</h2>
            </div>
            <div class='row col-sm-12'>
	           <div class='row col-sm-12' style="margin-top:20px;">	               
	               <div class='col-sm-3'>Filtre por: Todos</div>
	               <div class='col-sm-3'>Avaliação Positiva</div>
                   <div class='col-sm-3'>Avaliação Negativa</div>
                   <div class='col-sm-3'>Data</div>                   
	           </div>
	           <div ng-if="avaliacoesUsuario" class='col-sm-12 card cardRanking' ng-repeat="avaliacao in avaliacoesUsuario" style='padding: 15px;margin-top:20px;'>   
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
                <div ng-if="avaliacoesUsuario.length==0" class='col-sm-12'>
                    <center>                        
                        <h3> Não há avaliações suas</h3>
                    </center>
               </div>   
	       </div>
	    </div>	     
	    <div class='col-sm-2'></div>
	</div>        