var hospitaliza = angular.module('Hospitaliza', ['ngRoute']);

hospitaliza.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "../main.php"
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