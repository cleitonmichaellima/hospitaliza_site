hospitaliza.controller('usuarioController', function($scope,usuarioService) {

  var carregarDadosUsuario = function (){
		estagiarioService.getDadosUsuario().then(function (response){ 
		});
	}

  $scope.inserirUsuario = function(){
      // verificar se email ja nao esta cadastrado
      usuarioService.getInsereUsuario($scope.newUser).then(function (response){       			
		
		});        
  
  }
	 
                       
  var init = function  (){
      $scope.newUser = {
                        nome: '',
                        email: '',
                        senha: ''
                        }
      
                        
        }
    
 init()
});
