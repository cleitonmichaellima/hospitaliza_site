hospitaliza.factory('contatoService', function($http) {
    
     var _enviarContato = function (contato){
            return request = $http({
                                method: "post",
                                url: "http://cleitonlima.com.br/slim/usuario.php/contato/",
                                data: { email:contato.email,
                                        tituloAssunto:contato.tituloAssunto,
                                        descricaoAssunto:contato.descricaoAssunto
                                      }
                               
                            });
     }
     
     return {
         enviarContato : _enviarContato
     }
});