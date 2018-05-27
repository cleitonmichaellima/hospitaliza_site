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
    .when("/search", {
        templateUrl : "../search.php"
    })
    .when("/usuario/:id_usuario", {
        templateUrl : "../cadastro.php",
        controller: "usuarioController"
    });
}); 