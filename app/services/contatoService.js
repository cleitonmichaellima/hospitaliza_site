hospitaliza.factory('contatoService', function($http) {

     var _enviarContato = function (contato){
            return request = $http({
                                method: "post",
                                url: "http://hospitaliza.herokuapp.com/slim/usuario.php/contato/",
                                data: { email:contato.email,
                                        titulo_assunto:contato.tituloAssunto,
                                        descricao_assunto:contato.descricaoAssunto
                                      }

                            });
     }

     return {
         enviarContato : _enviarContato
     }
});
