hospitaliza.controller('instituicaoController', function($scope,instituicaoService,$routeParams,$rootScope) {
  
    var carregarDadosInstituicao = function (){       
            instituicaoService.getDadosInstituicao($routeParams.id_instituicao).then(function (response){ 
                $scope.instituicao.nome = response.data.nome;
                
            });
        
            instituicaoService.getDadosVariavesInstituicao($routeParams.id_instituicao).then(function (response){   
                
                $scope.instituicao.mediaNota = response.data.mediaNota;
                $scope.instituicao.totalAvaliacao = response.data.totalAvaliacao;
                $scope.instituicao.totalPositiva = response.data.totalPositiva;
                $scope.instituicao.totalNegativa = response.data.totalNegativa;
                $scope.instituicao.totalIndicam = response.data.totalIndicam;
               
            });
     }
    
    var carregarInstituicaoPorTermo = function (){    
            $scope.termoMostrar =  $routeParams.termo;
            instituicaoService.getInstituicaoPorTermo($routeParams.termo).then(function (response){ 
                $scope.avaliacaoEncotrada = response.data 
                $scope.avaliacaoTodosResultados = response.data 
                $scope.avaliacaoPositiva = []
                $scope.avaliacaoNegativa = []
                $scope.avaliacaoIndicacao = []

                angular.forEach($scope.avaliacaoEncotrada, function(value, key) {
                    if(value.nota>=3){
                       $scope.avaliacaoPositiva.push(value);
                    }
                    if(value.nota<3){
                       $scope.avaliacaoNegativa.push(value);
                    }
                     if(value.indicacao==1){
                       $scope.avaliacaoIndicacao.push(value);
                    }
                });            
            });
     }

  $scope.showPositivas = function(){
      $scope.avaliacaoEncotrada = $scope.avaliacaoPositiva;
  }
  
  $scope.showNegativas = function(){
      $scope.avaliacaoEncotrada = $scope.avaliacaoNegativa;
  }
  
  $scope.showIndicacao = function(){
      $scope.avaliacaoEncotrada = $scope.avaliacaoIndicacao;
  }
  
  $scope.showTodos = function(){
      $scope.avaliacaoEncotrada = $scope.avaliacaoTodosResultados;
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
  
   var carregarRankingMelhoresAvaliados = function (){       
        instituicaoService.getRanking(1).then(function (response){ 
                $scope.melhoresAvaliadas = response.data

        });
   }
   
   var carregarRankingPioresAvaliados = function (){       
        instituicaoService.getRanking(2).then(function (response){ 
                $scope.pioresAvaliadas = response.data

        });
   }
   
   var carregarRankingMaisIndicadas = function (){       
        instituicaoService.getRanking(3).then(function (response){ 
                $scope.maisIndicadas = response.data

        });
   }
  
  $scope.$on("recarregarInformacoesInstituicao",  function(events) {
     carregarDadosInstituicao();
     carregarAvaliacaoInstituicao();
  });
  
  $scope.setInstituicao =  function(){
    $rootScope.$broadcast('setIdInstituicao',$routeParams.id_instituicao)
  }
	 
                       
  var init = function  (){
        
            $scope.instituicao = {
                    nome: '',
                    id_usario: '',
                    mediaNota: '',
                    totalAvaliacao: '',
                    totalPositiva: '',
                    totalNegativa: '',
                    indicacao: ''
                    }

            $scope.avaliacoesInstituicao = [];
            $scope.instituicaoesEncontradas =  [];
            $scope.msgCadastro = ''
            carregarDadosInstituicao();
            carregarAvaliacaoInstituicao();
            carregarInstituicaoPorTermo();
            carregarRankingMaisIndicadas();
            carregarRankingMelhoresAvaliados();
            carregarRankingPioresAvaliados();
            
                        
       }
        
    
 init()
});
