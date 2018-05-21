
hospitaliza.controller('usuarioController', function($scope,usuarioService) {

  var carregarDadosUsuario = function (){
		estagiarioService.getDadosUsuario().then(function (response){ 
		});
	}

  
  $scope.inserirUsuario = function(){
      // verificar se email ja nao esta cadastrado
      usuarioService.getInsereUsuario($scope.newUser).then( 
            response=>{ 
             // close modal             
             $scope.msgNotification('Usuário Cadastrado com sucesso.') 
            },
            error=>{
              $scope.msgError(error)
            }
            ).finally(
             init();
            )
       }

	 }
                       
  var init (){
      $scope.newUser = {
                        nome: '',
                        email: '',
                        senha: ''
                        }
      
                        
  }
    
 init()
});
