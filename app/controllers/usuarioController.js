hospitaliza.controller('usuarioController', function($scope,usuarioService,$routeParams,loginService) {      
     
     var carregarDadosUsuario = function (){       
		usuarioService.getDadosUsuario($routeParams.id_usuario).then(function (response){ 
            $scope.user = response.data;
            $scope.user.id_usuario = $routeParams.id_usuario
            
		});
	 }
     var carregarAvaliacaoUsuario = function (){       
            usuarioService.getAvaliacaoUsuario($routeParams.id_usuario).then(function (response){ 
                    $scope.avaliacoesUsuario = response.data

            });
     }

  $scope.inserirUsuario = function(){
      $scope.msgCadastro = '';
      // verificar se email ja nao esta cadastrado
      
      if($scope.newUser.senha!=$scope.newUser.senhaConf){
          $scope.msgCadastro = 'Senhas diferentes';
          return false;
          
      }
      else{
          // verifica email
          usuarioService.getVerificarSeEmailJaCadastrado($scope.newUser.email).then(function (response){   
              if(response.data.email==''){
                  // novo cadastro
                  usuarioService.getInsereUsuario($scope.newUser).then(function (response){       			

                  }); 
              }
              else{
                   $scope.msgCadastro = 'Email já cadastrado!Tente outro e-mail ou faça o login';
                    return false;
              }
		
		}); 
            
      }
             
  
  }
  
  $scope.atualizarDados = function (){
      
      usuarioService.getAtualizarDadosUsuario($scope.user).then(function (response){ 
            
      })
  }
	 
                       
  var init = function  (){  
          $scope.nomeMostra = loginService.getName();

          $scope.newUser = {
                            nome: '',
                            email: '',
                            senha: ''
                            }
      
          $scope.msgCadastro = ''
          carregarDadosUsuario();
          carregarAvaliacaoUsuario();
                        
       }
    
 init()
});
