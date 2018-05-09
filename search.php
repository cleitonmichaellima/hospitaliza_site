<html>	
	<head>
		<title>Hospitaliza</title>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- Veu Js -->
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	</head>
	<style>
		.center {
				text-align: center;
				margin: auto;
		}

		#barraProcurarNav{
			height: 35px;
			font-size: 20px;
			width: 400px
		}

		#btnProcurarNav{
			margin-left: 10px;
		}

		#btnCadastreseInicial{
			margin-right: 20px;
		}

		body{
			font-family: tahoma;
		}

		.navBarPrincipal{
			background-color: #fff!important;
			padding-left: 10%;
    		padding-right: 10%;	
		}

		.jumbPrincipal {
			background-color: #1999a7;
		}

		.textJumbPrincipal{
			color: #fff;
		}
		.logo{
			width: 20%;
		}
	</style>
	<body>
	<div id="app" class='row center'>
		<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal">
			<a class="navbar-brand logo">
				<img src="img/logo_hospitaliza.png" width="50%" style='float:left;'>
			</a>
			<span class="form-inline">			
				<input id="barraProcurarNav" type="text" class='form-control'>				
				<button class='btn btn-primary btn-sm' id="btnProcurarNav"> Procurar </button>			
			</span>
			<span class="form-inline">
				<button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
				<button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
			</span>
		</nav>		
	</div>

	<!-- Modal cadastre-se -->
	<div class="modal fade" id="modalCadastre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<label>Nome Completo:</label>
							<input type='text' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-10'>
							<label>E-mail:</label>
							<input type='text' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-5'>
							<label>Senha:</label>
							<input type='password' class='form-control'>
						</div>						
						<div class='col col-sm-5'>
							<label>Confirme a senha:</label>
							<input type='password' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>						
					</div>         
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success">Efetuar Cadastro</button>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal cadastre-se -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<label>E-mail:</label>
							<input type='text' class='form-control'>
						</div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-1'></div>
						<div class='col col-sm-5'>
							<label>Senha:</label>
							<input type='password' class='form-control'>
						</div>
						<div class='col col-sm-6'></div>						
					</div>         
				</div>
				<div class="modal-footer">
					<center>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-success">Entrar</button>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	var app = new Vue({
			el: '#app',
			data: {
				message: 'Its a Blank Page by VeuJS'

			}
		})
</script>