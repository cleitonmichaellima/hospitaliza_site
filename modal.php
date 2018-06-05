<!-- Modal cadastre-se -->
	<div class="modal fade" id="modalCadastre" ng-controller='usuarioController' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class='row'>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>Nome Completo:</label>
							<input type='text' ng-model='newUser.nome' class='form-control'>							
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>E-mail:</label>
							<input type='text' ng-model='newUser.email' class='form-control'>							
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-5'>
							<label>Senha:</label>
							<input type='password' ng-model='newUser.senha' class='form-control'>							
						</div>						
						<div class='col col-sm-5'>
							<label>Confirme a senha:</label>
							<input type='password' ng-model='newUser.senhaConf' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>	
					</div>
                    <div class='row'>
					    <div class='col col-sm-12' style='text-align:center;'>
						    <font ng-bind='msgCadastro' style='color:red;font-size:15px;'></font>
				        </div>	
                    </div>
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success" ng-click="inserirUsuario()" ng-class="{ 'disabled': !newUser.nome ||!newUser.email ||!newUser.senha ||!newUser.senhaConf }">Efetuar Cadastro</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal cadastre-se -->
	<div class="modal fade" id="modalLogin"   ng-controller="loginController" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class='row'>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>E-mail:</label>
							<input type='text'  ng-model='login.email' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-5'>
							<label>Senha:</label>
							<input type='password' ng-model='login.senha' class='form-control'>
						</div>
						<div class='col col-sm-6'>
						</div>	
						<div class='col col-sm-12' style='text-alig:center;'>						    
						    <font ng-bind='msgError' style='color:red;font-size:15px;'></font>
						</div>						
					</div>         
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success"  ng-click="logar()">Entrar</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Modal AVALIAR-se -->
	<div class="modal fade" id="modalAvaliar"   ng-controller="avaliacaoController" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Registrar Avaliação</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class='row' ng-if="logado">
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>Titulo Avaliação</label>
							<input type='text'  ng-model='novaAvaliacao.titulo' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>Descrição:</label>
							<textarea class="form-control" ng-model="novaAvaliacao.descricao"></textarea>
						</div>
						<div class='col col-sm-1'></div>	
						<div class='col col-sm-1'></div>
						<div class=' row col col-sm-10'>
                            <label>Nota:</label><br>
                            <div class='col-sm-12'>
                                <li><input type="radio" ng-model="novaAvaliacao.nota" value='1'> 1 (Muito Ruim)</li>
                                <li><input type="radio" ng-model="novaAvaliacao.nota" value='2'> 2 (Ruim)</li>
                                <li><input type="radio" ng-model="novaAvaliacao.nota" value='3'> 3 (Regular)</li>
                                <li><input type="radio" ng-model="novaAvaliacao.nota" value='4'> 4 (Bom)</li> 
                                <li><input type="radio" ng-model="novaAvaliacao.nota" value='5'> 5 (Muito Bom)</li>
                            </div>												 
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class=' row col col-sm-10'>
							<label>Indicaria esta instituição para recorrer ao atendimento ?</label>	
							<div class='col-sm-12'>						
                                <input type="radio" ng-model="novaAvaliacao.indicacao" value='1'> Sim
                                <input type="radio" ng-model="novaAvaliacao.indicacao" value='0'> Não
                            </div>				 
						</div>
						<div class='col col-sm-1'></div>							
					</div> 
					<div class='row' ng-if="!logado">
                        <div class='col-sm-1'></div>
                        <div class='col-sm-10'>
                            <h5> Olá,
                                <br>
                                   Para fazer a avaliação da instituição de saúde. È necessário que vocês esteja conectado ao portal.
                            </h5>
                        </div>
                        <div class='col-sm-1'></div>
                        <div class='col-sm-1'></div>
                        <div class="col-sm-5">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Cadastre-se</h5>
                                <p class="card-text">Caso você não possua cadastro, clique no botão abaixo para efetua-lo</p>
                                <button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-dismiss="modal" data-toggle="modal" data-target="#modalCadastre">Cadastre-se</button>
                              </div>
                            </div>
                        </div>   
                        <div class="col-sm-5">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Logue-se</h5>
                                <p class="card-text">Caso já possua um cadastro em nosso portal, é só logar e fazer a sua avaliação</p>
                                <button class="btn btn-outline-success my-2 my-sm-0" data-dismiss="modal" data-toggle="modal" data-target="#modalLogin">Entrar</button>
                              </div>
                            </div>
                        </div>  
                        <div class='col-sm-1'></div>
					</div>    
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success"  ng-class="{ 'disabled': !novaAvaliacao.titulo || !novaAvaliacao.descricao || !novaAvaliacao.nota || !novaAvaliacao.indicacao }" data-dismiss="modal" ng-click="inserirAvaliacao()">Registrar Avaliação</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Modal Contato -->
	<div class="modal fade" id="modalContato"    ng-controller='contatoController' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Contate-nos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class='row' ng-if='!retornoContato'>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>E-mail:</label>
							<input type='text'  ng-model='contato.email' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>Título do Assunto:</label>
							<input type='text' ng-model='contato.tituloAssunto' class='form-control'>
						</div>
                        <div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>Descrição do Assunto:</label>
                            <textarea class='form-control' ng-model='contato.descricaoAssunto' ></textarea>
						</div>
						<div class='col col-sm-1'>
						</div>										
					</div> 
					<div class='row' ng-if='retornoContato'>
					    <div class='col col-sm-1'></div>
                        <div class='col col-sm-10'>
                            <div style='width:80%' class="alert alert-{{contatoStatus}}"  ng-if="msgContato" role="alert">
                                  {{msgAtualizaCadastro}}                          
                            </div>
                        </div>
						<div class='col col-sm-1'>
						</div>
					</div>        
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success" ng-click="enviar();" ng-class="{ 'disabled': !contato.email ||!contato.tituloAssunto ||!contato.descricaoAssunto}" >Enviar</button>
					</center>
				</div>
			</div>
		</div>
	</div>
