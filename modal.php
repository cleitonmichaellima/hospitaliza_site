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
						<div class='col col-sm-6'></div>						
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
	
    <!-- Modal cadastre-se -->
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
					<div class='row'>
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
                                <li><input type="radio" name="nota" ng-model="novaAvaliacao.nota" ng-true-value='1'> 1 (Muito Ruim)</li>
                                <li><input type="radio" name="nota" ng-model="novaAvaliacao.nota" ng-true-value='2'> 2 (Ruim)</li>
                                <li><input type="radio" name="nota" ng-model="novaAvaliacao.nota" ng-true-value='3'> 3 (Regular)</li>
                                <li><input type="radio" name="nota" ng-model="novaAvaliacao.nota" ng-true-value='4'> 4 (Bom)</li> 
                                <li><input type="radio" name="nota" ng-model="novaAvaliacao.nota" ng-true-value='5'> 5 (Muito Bom)</li>
                            </div>												 
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class=' row col col-sm-10'>
							<label>Indicaria esta instituição para recorrer ao atendimento ?</label>	
							<div class='col-sm-12'>						
                                <input name="indicacao" type="radio" ng-model="novaAvaliacao.indicacao" ng-true-value='1'> Sim
                                <input name="indicacao" type="radio" ng-model="novaAvaliacao.indicacao" ng-true-value='0'> Não
                            </div>				 
						</div>
						<div class='col col-sm-1'></div>							
					</div>         
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success"  ng-click="inserirAvaliacao()">Registrar Avaliação</button>
					</center>
				</div>
			</div>
		</div>
	</div>