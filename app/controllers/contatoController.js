hospitaliza.controller('contatoController', function($scope,loginService,contatoService) {      
    
    $scope.enviar  =  function (){
        contatoService.enviarContato($scope.contato).then(function (response){ 
            if(response.data.status==1){               
                $scope.contatoStatus = 'success';
                $scope.msgContato = 'Obrigado por entrar em contato, retornaremos assim que possível. ';
            }
            else{
                $scope.contatoStatus = 'danger';
                $scope.msgContato = 'Ocorreu um erro ao entrar em contato, por favor, tente mais tarde.';
            }
            
            $scope.retornoContato = 1;
        });
    }
    

    var init =  function (){
        $scope.contato = {
                        email : '',
                        tituloAssunto : '',
                        descricaoAssunto : ''
                    }
        
        $scope.msgAtualizaCadastro = '';
        $scope.retornoContato = '';
        $scope.contatoStatus = '';
    }
    init();
});