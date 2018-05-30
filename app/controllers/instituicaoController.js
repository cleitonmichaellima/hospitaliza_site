hospitaliza.controller('instituicaoController', function($scope,instituicaoService,$routeParams) {
  
    var carregarDadosInstituicao = function (){       
            instituicaoService.getDadosInstituicao($routeParams.id_instituicao).then(function (response){ 
                $scope.instituicao.nome = response.data.nome;

            });
     }
    
    var carregarInstituicaoPorTermo = function (){       
            instituicaoService.getInstituicaoPorTermo($routeParams.termo).then(function (response){ 
                
            });
     }

  
  $scope.atualizarVisualizacoes = function (){
      
      usuarioService.getAtualizarDadosUsuario($scope.user).then(function (response){ 
            
      })
  }
  
  var carregarAvaliacaoInstituicao = function (){       
            instituicaoService.getAvaliacaoInstituicao($routeParams.id_instituicao).then(function (response){ 
                    $scope.avaliacoesInstituicao = response.data

            });
   }
  
  
  
	 
                       
  var init = function  (){
            $scope.instituicao = {
                    nome: '',
                    id_usario: ''                            
                    }

            $scope.avaliacoesInstituicao = [];

            $scope.msgCadastro = ''
            carregarDadosInstituicao();
            carregarAvaliacaoInstituicao();
            carregarInstituicaoPorTermo();
                        
       }
        
    
 init()
});
