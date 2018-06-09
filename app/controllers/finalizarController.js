hospitaliza.controller('finalizarController', function($location,loginService,$scope,$rootScope) {

   $scope.finalizarSessao = function (){
        loginService.finalizar(loginService.getPassUser())               
        window.location.href = 'http://hospitaliza.cleitonlima.com.br/'	
        $rootScope.$broadcast('setUnlogedAvaliacao');
        $rootScope.$broadcast('setUnlogedNav');
        
   }

   

});