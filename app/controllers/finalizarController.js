hospitaliza.controller('finalizarController', function($location,loginService,$scope,$rootScope) {

   $scope.finalizarSessao = function (){
        loginService.finalizar(loginService.getPassUser())               
        $location.path('/');			

   }

   

});