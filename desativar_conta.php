	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row' ng-controller='usuarioController'>
	    <div class='col-sm-2'></div>
	    <?php
            require 'subMenuUsuario.php';
        ?>   
	    <div class='row col-sm-6 cardRanking ' style='margin-top:50px;padding:20px;'>
            <div class='col-sm-12'>
                <h2>Desativar minha Conta</h2>
            </div>
            
            <div class='row col-sm-12'>
                <div class='row col-sm-12' style='margin-top: 40px;'> 
                    <div class='col-sm-12'>
                        <h4>Motivo da desativação</h4>
                    </div>                    
                    <div class='row col-sm-12'>
                       <div class='col-sm-6'>
                           <li>
                               <input type='radio' ng-model='motivoDesativacao' value='1'> Tenho dúvidas em relação a privacidade
                           </li>
                           <li>
                               <input type='radio' ng-model='motivoDesativacao' value='2'> Não sei utilizar a plataforma
                           </li>
                            <li>
                               <input type='radio' ng-model='motivoDesativacao' value='3' > Minha saída é temporária. Eu voltarei.
                           </li>
                       </div>
                       <div class='col-sm-6'>
                           <li>
                               <input type='radio' ng-model='motivoDesativacao' value='4'> Não acho que a plataforma seja útil
                           </li>
                           <li>
                               <input type='radio' ng-model='motivoDesativacao' value='5'> Não sinto confiança nas informações da plataforma
                           </li>
                            <li>
                               <input type='radio' ng-model='motivoDesativacao' value='6' > Outro
                           </li>
                       </div>                        
                    </div>                    
                </div>              
                 <div class='col-sm-12' style='margin-top:20px;'>
                    <center>
                        <button class='btn btn-danger' style='margin:auto;'  data-toggle='modal' data-target="#modalDesativarConta" ng-class="{ 'disabled':!motivoDesativacao}"> Desativar Conta</button>
                    </center>
                </div>
	        </div>
            
               <!-- Modal Finalizar Sessão -->
                <div class="modal fade" id="modalDesativarConta"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Contate-nos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5> Confima que deseja desativar a conta ?</h5>
                            </div>
                            <div class="modal-footer">
                                <center>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="desativarUsuario();" >Confirmar</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
	    </div>	     
	    <div class='col-sm-2'></div>
	</div>        