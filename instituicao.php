<html>	
	<head>
		<title>Hospitaliza</title>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- Angular Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
        <script src="app/app.js"></script>  
        
        <!-- services -->
        <script src="app/services/usuarioService.js"></script>
        <script src="app/services/loginService.js"></script>
        
        <!-- controllers-->
        <script src="app/controllers/usuarioController.js"></script>
        <script src="app/controllers/loginController.js"></script>

	</head>

	<body id="Hospitaliza">
	<div class="row col-sm-12" style="background: #3b3636;height: 30px;"></div>
	<div  class='row center cardRanking'>
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
	<div class='row'>
	    <div class='col-sm-2'></div>
        <div class='col-sm-8' style='margin-top: 50px;'> <!-- caixa com as informações da instituicao-->
            <div class='card' style='padding: 20px;'>
                <div class='col-sm-12'>
                    <h2> Hospital Santa Casa</h2>
                </div>
                <div class='row col-sm-12'>
                    <div class='col-sm-8'>
                       Resumo da instituicao <br>
                       Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impresso
                    </div>
                    <div class='col-sm-4'>
                        Numero de visualizações <br>
                        <p style='font-size:20px'>12</p>
                    </div>           
                </div>
                <div class='row col-sm-12' style='margin-top: 50px;'>
                    <div class='col-sm-3'>
                        <p style="margin-bottom: -20px;">Média de Notas</p>
                        <p style='font-size:60px;'>4.5</p>
                    </div>
                    <div class='row col-sm-9' style='background:gray;color:#fff;'>
                      <h1 style='margin:auto;'>LOCALIZAÇÃO</h1>
                    </div>           
                </div>
                <div class='row col-sm-12' style='margin-top: 50px;'>
                    <div class='col-sm-3'>
                       <h5>Total de Avaliações</h5>
                       <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Total deAvaliações Positivas</h5>
                       <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                       <h5>Total deAvaliações Negativas</h5>
                       <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div> 
                    <div class='col-sm-3'>
                        <h5>Total de Indicações</h5>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>                 
                </div>
            </div>
            <div class="row col-sm-12" style="margin-top: 50px;">
                  <button style="margin: auto;" class="btn btn-outline-success btn-lg"> Avaliar Instituição </button>
            </div>
            <div class='row col-sm-12'>
                <h4> Avaliações de Usuários</h4>
            </div>
            <div class='row col-sm-12'>
               <div class='col-sm-1'>                
               </div>
               <div class='col-sm-10 card cardRanking' style='padding: 20px;'>   
                   <h5> Ótima instituição</h5>   
                   Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impresso          
               </div>
               <div class='col-sm-1'>                
               </div>
               <div class='col-sm-1'>                
               </div>
               <div class='col-sm-10 card cardRanking' style='padding: 20px;margin-top:5px;'>   
                   <h5> Péssima instituição</h5>   
                   Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impresso          
               </div>
               <div class='col-sm-1'>                
               </div>
            </div>
        </div>
	    </div>
	    <div class='col-sm-2'></div>
	    <div class='col-sm-2'></div>
	</div>
	<?php
          require "modal.php";   
    ?>
</body>
</html>
