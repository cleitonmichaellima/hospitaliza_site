hospitaliza.factory('instituicaoService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/instituicao.php/instituicao/"
    
    var _getDadosInstituicao = function (id){

        return request = $http.get(url+id);
    }
    
     var _getAvaliacaoInstituicao = function (id){

        return request = $http.get("http://cleitonlima.com.br/slim/instituicao.php/avaliacaoInstituicao/"+id);
    }
     
    var _getInstituicaoPorTermo = function (termo){

        return request = $http.get("http://cleitonlima.com.br/slim/instituicao.php/buscaTermoInstituicao/"+termo);
    }

    return {
        getDadosInstituicao : _getDadosInstituicao,
        getAvaliacaoInstituicao : _getAvaliacaoInstituicao,
        getInstituicaoPorTermo : _getInstituicaoPorTermo
    }
});
