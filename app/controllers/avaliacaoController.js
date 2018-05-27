hospitaliza.controller('avaliacaoController', function($scope,avaliacaoService,$routeParams) {

  $scope.inserirAvaliacao = function(){      
        console.log($scope.novaAvaliacao)
        avaliacaoService.getInsereAvaliacao($scope.novaAvaliacao).then(function (response){       			
		
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
  }
         
    
 init()
});
