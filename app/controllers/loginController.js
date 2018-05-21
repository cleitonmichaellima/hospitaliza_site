hospitaliza.controller('loginController', function($location,AuthenticationService,$scope,usuarioService) {

   var logar = function (){
                            AuthenticationService.Login($scope.login.email,$scope.login.senha, function (response) {
                                if (response.success) {
                                    AuthenticationService.SetCredentials(vm.username, vm.password);
                                    $location.path('/');
                                } else {
                                    $scope.msgError(response.message);                                    
                                }
                            });

                        };
       
   var init = function(){
        AuthenticationService.setCredentials();
    }

});