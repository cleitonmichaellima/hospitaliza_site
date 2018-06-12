hospitaliza.factory('usuarioService', function($http) {
    
    var url = "http://cleitonlima.com.br/slim/usuario.php/usuario/"
    
    var _getDadosUsuario = function (id){

        return request = $http.get('http://cleitonlima.com.br/slim/usuario.php/usuario/'+id);
    }
    
    var _getAvaliacaoUsuario = function (id){

        return request = $http.get('http://cleitonlima.com.br/slim/usuario.php/avaliacaoUsuario/'+id);
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
                                        senha:newUser.senha,
                                        assinou_termo:newUser.termosDeUso
                                      }
                               
                            });
    }
    
    var _getDesativarUsuario =  function (desativar){
        return request = $http({
                                method: "post",
                                url: "http://cleitonlima.com.br/slim/usuario.php/desativarUsuario/",
                                data: { 
                                        id_usuario : desativar.id_usuario,
                                        motivo : desativar.motivo
                                      }                               
                            });
    }
    
    var _getAtualizarDadosUsuario = function(user){
        return request = $http({
                                method: "post",
                                url: url,
                                data: { 
                                        nome:user.nome,
                                        id_usuario: user.id_usuario,
                                        sexo:user.sexo,
                                        data_nascimento: user.data_nascimento,
                                        telefone:user.telefone,
                                        dddtelefone:user.dddtelefone                                   
                                        
                                      }                              
                            });
    }
    
    var _getlembrarSenha = function(email){
        return request = $http({
                                method: "post",
                                url: "http://cleitonlima.com.br/slim/usuario.php/lembrarSenha/",
                                data: { 
                                        email: email                               
                                        
                                      }                              
                            });
    }
        
    var _getVerificaChaveSenha = function (chave_unica){
          return request = $http({
                                method: "post",
                                url: "http://cleitonlima.com.br/slim/usuario.php/verificaChaveSenha/",
                                data: { 
                                        chave_unica: chave_unica                               
                                        
                                      }                              
                            });
    }
    
     var _getAtualizaSenhaUsuario = function (alterarSenha){
          return request = $http({
                                method: "post",
                                url: "http://cleitonlima.com.br/slim/usuario.php/alterarSenhaDoLembrar/",
                                data: { 
                                        senha: alterarSenha.senha,
                                        id_usuario : alterarSenha.id_usuario
                                        
                                      }                              
                            });
    }
    

    return {
        getInsereUsuario : _getInsereUsuario,
        getDadosUsuario : _getDadosUsuario,
        getAtualizarDadosUsuario : _getAtualizarDadosUsuario,
        getVerificarSeEmailJaCadastrado : _getVerificarSeEmailJaCadastrado,
        getAvaliacaoUsuario : _getAvaliacaoUsuario,
        getDesativarUsuario : _getDesativarUsuario,
        getlembrarSenha : _getlembrarSenha,
        getVerificaChaveSenha : _getVerificaChaveSenha,
        getAtualizaSenhaUsuario : _getAtualizaSenhaUsuario
    }
});
