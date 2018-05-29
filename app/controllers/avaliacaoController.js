hospitaliza.controller('avaliacaoController', function($scope,avaliacaoService,$routeParams) {

  $scope.inserirAvaliacao = function(){      
        console.log($scope.novaAvaliacao)
        avaliacaoService.getInsereAvaliacao($scope.novaAvaliacao).then(function (response){    
          $scope.novaAvaliacao.id_avaliacao = response.data;
          $scope.novaAvaliacao.id_avaliacao =  $scope.novaAvaliacao.id_avaliacao.replace(/[^0-9]/g,'')
          $scope.novaAvaliacao.id_avaliacao = parseInt($scope.novaAvaliacao.id_avaliacao);  
		  avaliacaoService.getInsereNota( $scope.novaAvaliacao).then(function (response){
              
          }); 
		}); 
  }             
  
 var carregarDadosAvaliacao = function (){       
		avaliacaoService.getDadosAvaliacao($routeParams.id_avaliacao).then(function (response){ 
            
            $scope.avaliacao.titulo = response.data.titulo;
            $scope.avaliacao.descricao = response.data.descricao; 
            $scope.avaliacao.id_instituicao = response.data.id_instituicao; 
            $scope.avaliacao.nota = response.data.nota;
            
		});
 }
 
  var init = function  (){
        $scope.novaAvaliacao = {
                                    id_usuario:109,
                                    id_instituicao:4,
                                    titulo:'',
                                    descricao : '',
                                    nota : parseInt(0),
                                    indicacao: parseInt(0),
                                    id_avaliacao: '',
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
