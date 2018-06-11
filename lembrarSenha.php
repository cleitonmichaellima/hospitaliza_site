<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
		<?php  require "navbar.php" ?>
	</div>
	<div class='row' >
	    <div class='col-sm-2'></div>	    
	    <div class='row col-sm-8 cardRanking ' style='margin-top:50px;padding:20px;'>
            <div class='col-sm-12'>
                <h2>Recuperar Senha</h2>
            </div>
            
            <div class='row col-sm-12' ng-if='liberaCampos'>
                <div class='row col-sm-12' style='margin-top: 40px;'>                                     
                    <div class='row col-sm-12'>
                       <div class='col-sm-4'>                         
                       </div>
                       <div ng-if="!senhaAlterada" class='col-sm-4'>
                          <label> Nova Senha</label>
                          <input class='form-control' type='password' ng-model='novaSenha'>
                       </div>
                       <div class='col-sm-4'>                         
                       </div>
                        <div class='col-sm-4'>                         
                       </div>
                       <div ng-if="!senhaAlterada" class='col-sm-4'>
                         <label> Confirmar Nova Senha</label>
                         <input  class='form-control' type='password' ng-model='novaSenhaConfirma'>
                       </div>  
                        <div class='col-sm-4'>                         
                       </div>                      
                    </div> 
                    <div class='row col-sm-12' style='margin-top:20px;' ng-if='msgSenha'>
					    <div class='col col-sm-4'></div>
                        <div class='col col-sm-4'>
                            <div class="alert alert-{{msgSenhaStatus}}"  ng-if="msgSenha" role="alert">
                                  {{msgSenha}}                          
                            </div>
                        </div>
						<div class='col col-sm-4'>
						</div>
					</div>  
                </div>              
                 <div class='col-sm-12' style='margin-top:20px;'>
                    <center>
                        <button ng-if="!senhaAlterada" class='btn btn-success'  style='margin:auto;' ng-click="salvarSenhaNova(novaSenha,novaSenhaConfirma)" ng-class="{ 'disabled':!novaSenha || !novaSenhaConfirma}"> Salvar Senha</button>
                    </center>
                </div>
	        </div>
            <div class='row col-sm-12' ng-if='!liberaCampos'>
                <div class='row col-sm-12' style='margin-top:20px;' ng-if='msgSenhaBloqueio'>                    
                    <div class='col col-sm-12'>
                        <div class="alert alert-danger"  ng-if="msgSenhaBloqueio" role="alert">
                              {{msgSenhaBloqueio}}                          
                        </div>
                    </div>                    
				</div>  
            </div>
           
            
	    </div>	     
	    <div class='col-sm-2'></div>
	</div>     