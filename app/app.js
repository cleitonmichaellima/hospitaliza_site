var hospitaliza = angular.module('Hospitaliza', ['ngRoute']);

hospitaliza.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "../main.php",
        controller: "instituicaoController"
    })
    .when("/avaliacao/:id_avaliacao", {
        templateUrl : "../avaliacao.php"
    })
    .when("/instituicao/:id_instituicao", {
        templateUrl : "../instituicao.php",
        controller: "instituicaoController"
    })
    .when("/search/:termo", {
        templateUrl : "../search.php",
        controller: "instituicaoController"
    })
    .when("/sobre/", {
        templateUrl : "../sobre.php",       
    })
    .when("/error/", {
        templateUrl : "../error.php",       
    })
    .when("/duvidas/", {
        templateUrl : "../duvidas.php",       
    })
    .when("/desativar/:id_usuario", {
        templateUrl : "../desativar_conta.php", 
        controller: "usuarioController"
    })
     .when("/lembrarSenha/:chave_unica", {
        templateUrl : "../lembrarSenha.php", 
        controller: "lembrarSenhaController"
    })
    .when("/usuario/:id_usuario", {
        resolve: {
			check: function($location, loginService) {
				if(!loginService.isUserLoggedIn()) {
					$location.path('/');/// redirecionar
				}
			},
		},
        templateUrl : "../cadastro.php",
        controller: "usuarioController"
    });
}); 