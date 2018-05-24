<html>	
	<head>
		<title>Hospitaliza</title>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	    <div class='col-sm-2 card' style='padding: 50px;'>
	      <h5> Instituições</h5>
	      Hospital Santa Casa
	      Hospital Santo Antonio	      
	    </div>
	    <div class='row col-sm-5' >
	       <div class='col-sm-12 card' style='padding: 50px;height:200px;'>
	           Você pesquisou pelo termo:
	           <h3> Hospital Santa </h3>	           
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
	    <div class='col-sm-2 card' style='padding: 50px;'>
	      <h4> Melhores Avaliadas</h4>
	      <div>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
          </div>
	      <h5> Hospital Santa Casa</h5>
	      <div>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star checkedStar"></span>
            <span class="fa fa-star"></span>
          </div>
	      <h5>Hospital Santo Antonio</h5>      
	    </div>
	    <div class='col-sm-2'></div>
	</div>
	<?php
          require "modal.php";   
    ?>
</body>
</html>
