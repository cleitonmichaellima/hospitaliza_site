hospitaliza.controller('usuarioController', function($scope,usuarioService,$routeParams,loginService,$location,$rootScope,loginService) {      
     
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
                      // sucesso cadastro
                     
                      if(response.data.status==1){
                        
                        var login = {
                                     email: $scope.newUser.email,
                                     senha: $scope.newUser.senha
                                    }  
                        
                        loginService.login(login).then(function (response){ 
                            loginService.saveData(response.data);                        
                            $rootScope.$broadcast('setLogado');    
                            window.location.href = 'http://hospitaliza.cleitonlima.com.br/#!/usuario/'+response.data.id_usuario;	
                            
                        });
                          
                        $('#modalCadastre').modal('hide');
				        
                          
                      }
                      else{
                           $scope.msgCadastro = 'Erro ao efetuar cadastro, tente mais tarde';
                           return false;
                      }
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
          
          if(response.data.status==1){
              $scope.atualizaStatus = 'success';
              $scope.msgAtualizaCadastro = 'Cadastro atualizado com sucesso';
              $scope.msgAtualizaCadastro = 'Cadastro atualizado com sucesso';
           }
           else{
              $scope.msgAtualizaCadastro = 'Erro ao atualizar cadastro, tente mais tarde';
              $scope.atualizaStatus = 'danger'; 
          }
      })
  }
    
  
  $scope.desativarUsuario = function (){
      var desativarConta = {
                            motivo : $scope.motivoDesativacao,
                            id_usuario : loginService.getIdUsuario()
      }
      
      usuarioService.getDesativarUsuario(desativarConta).then(function (response){ 
          
          if(response.data.status==1){
              $scope.StatusDesativa = 'warning';
              $scope.msgDesativaCadastro = 'Cadastro desativado com sucesso, você será rederecionado para a página principal';              
               loginService.finalizar(loginService.getPassUser())               
               window.location.href = 'http://hospitaliza.cleitonlima.com.br/'	
               $rootScope.$broadcast('setUnlogedAvaliacao');
               $rootScope.$broadcast('setUnlogedNav');
               $location.path('#!/');	
           }
           else{
              $scope.msgAtualizaCadastro = 'Erro ao desativar cadastro, tente mais tarde';
              $scope.atualizaStatus = 'danger'; 
          }
      })
  }
  
  $scope.hideAlert =  function(){
       $scope.atualizaStatus = '';
       $scope.msgAtualizaCadastro = '';
  }
                       
  var init = function  (){  
          $scope.nomeMostra = loginService.getName();
          loginService.isUserLoggedIn();    
          if($routeParams.id_usuario!=''){
            if($routeParams.id_usuario!=loginService.getIdUsuario()){
             // $location.path('/error/');	
            }  
          }
          
          $scope.newUser = {
                            nome: '',
                            email: '',
                            senha: '',
                            termosDeUso : '',
                            }
      
          $scope.msgCadastro = ''
          carregarDadosUsuario();
          carregarAvaliacaoUsuario();
                        
       }
    
 init()
});
