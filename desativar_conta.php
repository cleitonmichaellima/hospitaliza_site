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
            <li>Alterar Senha</li>
            <li>Deletar Conta</li>
            <li>Finalizar Sessão</li>
            
	    </div>	   
	    <div class='row col-sm-6 cardRanking ' style='margin-top:50px;padding:20px;'>
            <div class='col-sm-12'>
                <h2>Desativar minha Conta</h2>
            </div>
            
            <div class='row col-sm-12'>
                <div class='row col-sm-12' style='margin-top: 40px;'> 
                    <div class='col-sm-12'>
                        <h4>Motivo da desativação</h4>
                    </div>
                    <div class='col-sm-1'></div>
                    <div class='row col-sm-10'>
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
                    <div class='col-sm-1'></div>
                </div>              
                 <div class='col-sm-12' style='margin-top:20px;'>
                    <center>
                        <button class='btn btn-danger' style='margin:auto;' ng-click="desativarConta()" ng-class="{ 'disabled':!motivoDesativacao}"> Desativar Conta</button>
                    </center>
                </div>
	        </div>
            
	    </div>	     
	    <div class='col-sm-2'></div>
	</div>        