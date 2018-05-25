hospitaliza.controller('usuarioController', function($scope,usuarioService,$routeParams) {
  
  var carregarDadosUsuario = function (){       
		usuarioService.getDadosUsuario($routeParams.id_usuario).then(function (response){ 
            $scope.user.nome = response.data.nome;
            $scope.user.id_usuario = $routeParams.id_usuario
            
		});
	}

  $scope.inserirUsuario = function(){
      // verificar se email ja nao esta cadastrado
        console.log($scope.newUser);
      if($scope.newUser.senha!=$scope.newUser.senhaConf){
          $scope.msgCadastro = 'Senhas diferentes';
          return false;
          
      }
      else{
        usuarioService.getInsereUsuario($scope.newUser).then(function (response){       			
		
		}); 
      }
             
  
  }
  
  $scope.atualizarDados = function (){
      
      usuarioService.getAtualizarDadosUsuario($scope.user).then(function (response){ 
            
      })
  }
	 
                       
  var init = function  (){
          $scope.newUser = {
                            nome: '',
                            email: '',
                            senha: ''
                            }
         $scope.user = {
                        nome: '',
                        id_usario: ''                            
                        }
      
      
          $scope.msgCadastro = ''
          carregarDadosUsuario();
                        
       }
    
 init()
});
