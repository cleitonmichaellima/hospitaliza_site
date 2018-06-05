<html>	
	<head>
		<title>Hospitaliza</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- Angular Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
        <script src="app/app.js"></script>  
        
        <!-- services -->
        <script src="app/services/usuarioService.js"></script>
        <script src="app/services/loginService.js"></script>
        <script src="app/services/avaliacaoService.js"></script>
        <script src="app/services/instituicaoService.js"></script>
        <script src="app/services/contatoService.js"></script>
        
        
        <!-- controllers-->
        <script src="app/controllers/usuarioController.js"></script>
        <script src="app/controllers/loginController.js"></script>
        <script src="app/controllers/avaliacaoController.js"></script>
        <script src="app/controllers/instituicaoController.js"></script>
        <script src="app/controllers/navController.js"></script>
        <script src="app/controllers/contatoController.js"></script>

    </head>

	<body ng-app="Hospitaliza">
	  <ng-view></ng-view>
	<?php
          require "modal.php";  
          require "footer.php";
    ?>
    
</body>
</html>
