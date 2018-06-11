hospitaliza.controller('lembrarSenhaController', function($location,usuarioService,$scope,$rootScope) {

   $scope.lembrarSenha = function (){
        usuarioService.getlembrarSenha($scope.email).then(function (response){ 
            if(response.data.status==1){
                $scope.msgLembrarSenha = 'Foi enviado um e-mail ao seu cadastro para atualiza a sua senha';
                $scope.statusLembrarSenha = 'success'; 
            }
            else{
                $scope.msgLembrarSenha = 'Erro ao tentar lembrar a senha';
                $scope.statusLembrarSenha = 'danger'; 
            }
        });

   }

   

});