hospitaliza.controller('navController', function($scope,loginService,$rootScope) {      
    
    

    var init =  function (){
        loginService.isUserLoggedIn();    
        $scope.usuarioLogado = loginService.getPassUser();
        $scope.id_usuario = loginService.getIdUsuario();
        $scope.nomeUsuario = loginService.getName();
    }
    init();
    
    $scope.$on("setUnlogedNav",  function(events) {
        $scope.usuarioLogado = ''
    });
});