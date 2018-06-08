hospitaliza.controller('navController', function($scope,loginService) {      
    
    

    var init =  function (){
        loginService.isUserLoggedIn();    
        $scope.usuarioLogado = loginService.getPassUser();
        $scope.id_usuario = loginService.getIdUsuario();
        $scope.nomeUsuario = loginService.getName();
    }
    init();
});