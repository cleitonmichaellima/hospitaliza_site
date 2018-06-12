hospitaliza.controller('loginController', function($location,loginService,$scope,usuarioService,$rootScope) {

   $scope.logar = function (){
                loginService.login($scope.login).then(function (response){ 
                    if (response.data.status=='1') {      
                        if(response.data.inativado==0||response.data.inativado==''){ 
                                loginService.saveData(response.data);

                                $rootScope.$broadcast('setLogado');

                                $('#modalLogin').modal('hide');
                                $location.path('/usuario/'+response.data.id_usuario);	
                        }
                        else{
                            $scope.ErrorLogin =2; 
                            $scope.msgError = 'Cadastro inativado, por favor, entre em contato.'; 
                        }
                    } else {
                        $scope.ErrorLogin = 1; 
                        $scope.msgError = 'E-mail ou senha incorretos, se esqueceu sua senha';                                    
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