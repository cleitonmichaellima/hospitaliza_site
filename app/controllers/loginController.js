hospitaliza.controller('loginController', function($location,loginService,$scope,usuarioService) {

   $scope.logar = function (){
                loginService.login($scope.login).then(function (response){ 
                    if (response.data.status=='1') {                                    
				        loginService.saveData(response.data);
                        $('#modalLogin').modal('hide');
				        $location.path('/usuario/'+response.data.id_usuario);			
                    } else {
                        $scope.msgError='E-mail ou senha incorretos';                                    
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