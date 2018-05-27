hospitaliza.controller('avaliacaoController', function($scope,avaliacaoService,$routeParams) {

  $scope.inserirAvaliacao = function(){      
        console.log($scope.novaAvaliacao)
        avaliacaoService.getInsereAvaliacao($scope.novaAvaliacao).then(function (response){       			
		
		}); 
  }             
  
 var carregarDadosAvaliacao = function (){       
		avaliacaoService.getDadosAvaliacao($routeParams.id_avaliacao).then(function (response){ 
            
            $scope.avaliacao.titulo = response.data.titulo;
            $scope.avaliacao.descricao = response.data.descricao; 
            $scope.avaliacao.id_instituicao = response.data.id_instituicao; 
            
		});
 }
 
  var init = function  (){
          $scope.novaAvaliacao = {
                                    id_usuario:109,
                                    id_instituicao:4,
                                    titulo:'',
                                    descricao : '',
                                    nota : '',
                                    indicacao: ''                                    
                                }
          $scope.avaliacao = {                                    
                                    titulo:'',
                                    descricao : '',
                                    nota : '',
                                    indicacao: ''                                    
                                }
      carregarDadosAvaliacao()
  }
         
    
 init()
});
