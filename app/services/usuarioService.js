hospitaliza.factory('usuarioService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/usuario.php/usuario/"
    
    var _getDadosUsuario = function (){

        return request = $http({
                                method: "get",
                                url: url,
                                data: { id_usuario: user.id },
                                headers: { 'Content-Type': 'application/json' }
                          });
    }

    var _getInsereUsuario = function(newUser){
        return request = $http({
                                method: "post",
                                url: url,
                                data: { nome:newUser.nome,
                                        email:newUser.email,
                                        senha:newUser.senha
                                      }
                               
                            });
    }

    return {
        getInsereUsuario : _getInsereUsuario,
        getDadosUsuario : _getDadosUsuario
    }
});
