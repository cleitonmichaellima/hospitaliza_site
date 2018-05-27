hospitaliza.factory('instituicaoService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/instituicao.php/instituicao/"
    
    var _getDadosInstituicao = function (id){

        return request = $http.get(url+id);
    }
    
     var _getAvaliacaoInstituicao = function (id){

        return request = $http.get("http://cleitonlima.com.br/slim/instituicao.php/avaliacaoInstituicao/"+id);
    }

    return {
       getDadosInstituicao : _getDadosInstituicao,
       getAvaliacaoInstituicao : _getAvaliacaoInstituicao
    }
});
