hospitaliza.factory('usuarioService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/usuario.php/usuario/"
    
    var _getDadosUsuario = function (id){

        return request = $http.get('http://cleitonlima.com.br/slim/usuario.php/usuario/'+id);
    }
    
    var _getVerificarSeEmailJaCadastrado = function (email){

        return request = $http.get('http://cleitonlima.com.br/slim/usuario.php/usuarioVerificaEmail/'+email);
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
    
    var _getAtualizarDadosUsuario = function(user){
        return request = $http({
                                method: "post",
                                url: url,
                                data: { 
                                        nome:user.nome,
                                        id_usuario: user.id_usuario
                                      }                              
                            });
    }

    return {
        getInsereUsuario : _getInsereUsuario,
        getDadosUsuario : _getDadosUsuario,
        getAtualizarDadosUsuario : _getAtualizarDadosUsuario,
        getVerificarSeEmailJaCadastrado : _getVerificarSeEmailJaCadastrado
    }
});
