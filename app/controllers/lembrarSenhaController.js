hospitaliza.controller('lembrarSenhaController', function($location,usuarioService,$scope,$rootScope,$routeParams) {

   $scope.lembrarSenha = function (){
        usuarioService.getlembrarSenha($scope.email).then(function (response){ 
            if(response.data.status==1){
                $scope.msgLembrarSenha = 'Foi enviado um e-mail ao seu cadastro para atualizar a sua senha';
                $scope.statusLembrarSenha = 'success'; 
                
            }
            else{
                $scope.msgLembrarSenha = 'Erro ao tentar lembrar a senha';
                $scope.statusLembrarSenha = 'danger'; 
            }
        });

   }
   
   var verificaSeChaveEstaAtiva = function (){
        usuarioService.getVerificaChaveSenha($routeParams.chave_unica).then(function (response){ 
            if(response.data.status==1){
                $scope.id_usuario_nova_senha = response.data.id_usuario
                $scope.liberaCampos = 1 
            }
            else{
                $scope.liberaCampos = '' 
                $scope.msgSenhaBloqueio = 'Sua solicitação de senha é inválida ou já expirou.';
                
            }
    });
  }
   
   $scope.salvarSenhaNova = function(senha,senhaConfirma){
       
      if(senha!=senhaConfirma){
          console.log('entrou aqui2')
          $scope.msgSenhaStatus = 'danger'
          $scope.msgSenha = 'Senhas diferentes';
          return false;
          
      }
      else{          
          var alteracaoSenha = {
                                    senha : senha,
                                    id_usuario : $scope.id_usuario_nova_senha
                                }
          
          usuarioService.getAtualizaSenhaUsuario(alteracaoSenha).then(function (response){ 
            if(response.data.status==1){
                $scope.msgSenha = 'Senha Alterada com sucesso. Pode efetuar o login ';
                $scope.msgSenhaStatus = 'success'; 
                $scope.senhaAlterada = 1;
            }
            else{
                $scope.msgSenha = 'Erro ao tentar lembrar a senha';
                $scope.msgSenhaStatus = 'danger'; 
                $scope.senhaAlterada = '';
            }
         });
          
       }
       
   }
    var init = function (){
        if($routeParams.chave_unica){
            $scope.novaSenha = '';
            $scope.novaSenhaConfirma = '';
            verificaSeChaveEstaAtiva();
        }
        else{
            
        }
    }

    init();

});