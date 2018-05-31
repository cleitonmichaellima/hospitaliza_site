	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row' ng-controller='usuarioController'>
	    <div class='col-sm-2'></div>
	    <div class='row col-sm-2 card' style='margin-top:50px;padding:20px;'>            
            Seja bem-vindo 
            <h4>{{user.nome}}</h4>
            <ul>               
                <li>Alterar Senha</li>
                <li>Deletar Conta</li>
                <li>Finalizar Sessão</li>
            </ul>  
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
                        <input type='radio' > Feminino
                    </li>
                    <li>
                        <input type='radio'> Masculino
                    </li>
                   </div>
                   <div class='col-sm-2'>
                       Data de Nascimento:
                   </div>
                   <div class='col-sm-3' >
                       <input type='text' style="width: 70%;" class='form-control'> 
                   </div>
                    <div class='col-sm-1'>                      
                   </div>
                </div> 
                <br>
                <br>
	           <div class='row col-sm-12' style='margin-bottom: 20px;'> 
                   <div class='col-sm-2'>
                       Telefone de Contato:
                   </div>
                   <div class='col-sm-2' >
                       <input type='text' style="width: 70%;"class='form-control'> 	            
                   </div>
                   <div class='col-sm-3'>
                       <input type='text' class='form-control'> 	                
                   </div>
                   <div class='col-sm-4'></div>	   
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
                   <div class='col-sm-3'>Indicação</div>                   
	           </div>
	           <div class='col-sm-12 card cardRanking' style='padding: 15px;margin-top:20px;'>   
                    <div style='display:inline;'>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h5 style='display:inline;'> Ótima instituição</h5> 
                    <i>Hospital Santa Casa</i> 23/05/2018 ás 19:00
                    Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVIdsdfsdfdsfs....          
               </div>
                <div class='col-sm-12 card cardRanking' style='padding: 15px;margin-top:10px;'>   
                    <div style='display:inline;'>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star checkedStar"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h5 style='display:inline;'> Péssima instituição</h5> 
                   <i>Hospital Santa Casa</i> 23/05/2018 ás 19:00
                   Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI...         
               </div>
	       </div>
	    </div>	     
	    <div class='col-sm-2'></div>
	</div>        