hospitaliza.factory('avaliacaoService', function($http) {

    var url = "http://hospitaliza.herokuapp.com/slim/contribuicao.php/avaliacao/"

    var _getInsereAvaliacao = function(novaAvaliacao){
        return request = $http({
                                method: "post",
                                url: url,
                                data: {
                                        titulo:novaAvaliacao.titulo,
                                        id_usuario:novaAvaliacao.id_usuario,
                                        id_instituicao:novaAvaliacao.id_instituicao,
                                        descricao:novaAvaliacao.descricao,
                                        indicacao:novaAvaliacao.indicacao
                                      }

                            });
    }
    
    var _getInsereNota = function(novaAvaliacao){
        return request = $http({
                                method: "post",
                                url: "http://hospitaliza.herokuapp.com/slim/contribuicao.php/avaliacaoNota/",
                                data: {
                                        nota:novaAvaliacao.nota,
                                        id_avaliacao:novaAvaliacao.id_avaliacao,
                                      }

                            });
    }

     var _getDadosAvaliacao = function (id){

        return request = $http.get(url+id);
    }



    return {
        getInsereAvaliacao : _getInsereAvaliacao,
        getDadosAvaliacao : _getDadosAvaliacao,
        getInsereNota : _getInsereNota

    }
});
