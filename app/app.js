var hospitaliza = angular.module('Hospitaliza', ['ngRoute']);

hospitaliza.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "../main.php"
    })
    .when("/avaliacao", {
        templateUrl : "../avaliacao.php"
    })
    .when("/instituicao", {
        templateUrl : "../instituicao.php"
    })
    .when("/search/:termo", {
        templateUrl : "../search.php"
    });
});