<html>	
	<head>
		<title>Hospitaliza</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- Angular Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
        <script src="app/app.js"></script>  

        <!-- services -->
        <script src="app/services/usuarioService.js"></script>

        <!-- controllers-->
        <script src="app/controllers/usuarioController.js"></script>
        
        
        
    </head>
	<style>        
		.center {
            text-align: center;
            margin: auto;
		}

		#barraProcurarInicial{
			height: 50px;
			font-size: 35px;
		}

		#btnProcurarInicial{
			margin-left: -130px;
		}

		#btnCadastreseInicial{
			margin-right: 20px;
		}

		body{
			font-family: 'Oswald', sans-serif;
		}

		.navBarPrincipal{
			background-color: #fff!important;	
		}

		.jumbPrincipal {
			background-color: #1999a7;
            background: url("http://getwallpapers.com/wallpaper/full/6/0/5/174855.jpg");
            height: 500px;
		}

		.textJumbPrincipal{
			color: #fff;
            margin-top:100px;
		}
        .checkedStar {
            color: lightblue;
        }
        
        .cardRanking{
            border-radius: 3px;
            box-shadow: 3px 2px 3px rgba(0,0,0,0.1);
        }
        
        li{
            text-align: left;
            list-style: none;
            font-weight: lighter;
        }
        
	</style>
	<body ng-app="Hospitaliza">
	<div  class='row center'>
		<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal">
			<a class="navbar-brand">
				<img src="img/logo_hospitaliza.png" width="15%" style='float:left;'>
			</a>
			<span class="form-inline">
				<button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
				<button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
			</span>
		</nav>
		<div class="jumbotron col col-sm-12 jumbPrincipal" >
			<h3 class="display-4 textJumbPrincipal">Digite o nome do hospital</h3>
			<div class='row'>
				<div class='col col-sm-3'>
				</div>
				<div class='col col-sm-5'>
					<input id="barraProcurarInicial" type="text" class='form-control'>
				</div>
				<div class='col col-sm-2'>
					<button class='btn btn-primary btn-lg' id="btnProcurarInicial"> Procurar </button>
				</div>
				<div class='col col-sm-2'>
				</div>
			</div>
		</div>
		<div class="row col-sm-12">
            <div class='col-sm-12'>
                <center>
                    <h3>
                        Ranking de Instituições Cadastradas no Portal
                    </h3>
                </center>
            </div>
            <div class="col-sm-1"></div>
            <div class=" row col-sm-10">
                <div class="col-sm-1"></div>               
                <div class="col-sm-2 cardRanking center" >
                    <h4> Instituições bem avaliados</h4>
                    <ul>
                        <li> 
                            <b> - Instiuicao 1 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li>
                            <b> - Instiuicao 2 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li>
                            <b> - Instiuicao 3 </b>
                            <br>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star checkedStar"></span>
                            <span class="fa fa-star"></span>
                        </li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                    <span>
                        <button class='btn btn-info btn-sm'> Ver Mais </button>
                    </span>
                </div>  
                <div class="col-sm-2 cardRanking center">
                     <h4> Instituições mal avaliados</h4>
                     <ul>
                        <li> <b> - Instiuicao 1 </b></li>
                        <li> <b> - Instiuicao 2 </b></li>
                        <li> <b> - Instiuicao 3 </b></li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                </div>              
                <div class="col-sm-2 cardRanking center">
                     <h4> Instituições mais procuradas</h4>
                     <ul>
                        <li> <b> - Instiuicao 1 </b></li>
                        <li> <b> - Instiuicao 2 </b></li>
                        <li> <b> - Instiuicao 3 </b></li>
                        <li> <b> - Instiuicao 4 </b></li>
                        <li> <b> - Instiuicao 5 </b></li>
                    </ul>
                </div>  
                <div class="col-sm-2 cardRanking center">
                     <h4> Termos mais utilizados</h4>
                     <ul>
                        <li> <b> - Hospital e Saúde </b></li>
                        <li> <b> - Hospital Porto Alegre </b></li>
                        <li> <b> - dfdsfs </b></li>
                        <li> <b> - Lorem Ipsum  </b></li>
                        <li> <b> - tatatatataatat </b></li>
                    </ul>
                </div>  
                <div class="col-sm-1" ></div>
            </div>            
            <div class="col-sm-1" ></div>		    
		</div>
	</div>
	
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
	<div class="modal fade" id="modalLogin"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<button type="button" class="btn btn-success"  ng-click="logarSe()">Entrar</button>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
