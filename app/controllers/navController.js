hospitaliza.controller('navController', function($scope,loginService) {      
    
    

    var init =  function (){
        loginService.isUserLoggedIn();    
        $scope.usuarioLogado = loginService.getIdUsuario();
    }
    init();
});