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
			font-family: tahoma;
		}

	</style>
  <body>
	<div id="app" class='row center'>
		<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12">
		  <a class="navbar-brand">Navbar</a>
		  <form class="form-inline">
		    <button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial">Cadastre-se</button>	
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
		  </form>
		</nav>
		<div class="jumbotron col col-sm-12">
			<h3 class="display-4">Digite o nome do hospital</h3>
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
	</div>
	
	<div id="app2" class='row'>
		<h2> Melhores Hospitais </h2>		
		<div class='row center'>		
			<div class='col col-sm-3 '>
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
			<div class='col col-sm-3 '>				
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>				
			</div>
			<div class='col col-sm-3 '>				
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>				
			</div>
			<div class='col col-sm-3 '>				
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
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
		    message: 'Its a Blank Page by VeuJS '
		  }
		})
</script>