hospitaliza.controller('loginController', function($location,loginService,$scope,usuarioService,$rootScope) {

   $scope.logar = function (){
                loginService.login($scope.login).then(function (response){ 
                    if (response.data.status=='1') {                                    
				        loginService.saveData(response.data);
                        
                        $rootScope.$broadcast('setLogado');
                        
                        $('#modalLogin').modal('hide');
				        $location.path('/usuario/'+response.data.id_usuario);			
                    } else {
                        $scope.msgError='E-mail ou senha incorretos, se esqueceu sua senha';                                    
                    }  
                });
   }
       
   var init = function(){
        AuthenticationService.setCredentials();
        $scope.login = {
                        email: '',
                        senha: ''
                        }
    }
   
   

});