hospitaliza.factory('avaliacaoService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/contribuicao.php/avaliacao/"

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
   

    return {
        getInsereAvaliacao : _getInsereAvaliacao
        
    }
});
