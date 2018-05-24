hospitaliza.controller('loginController', function($location,loginService,$scope,usuarioService) {

   $scope.logar = function (){
                            loginService.login($scope.login, function (response) {
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