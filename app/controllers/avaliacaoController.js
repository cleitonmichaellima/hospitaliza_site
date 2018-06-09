hospitaliza.controller('avaliacaoController', function($scope,avaliacaoService,$routeParams,$rootScope,loginService,instituicaoService) {
var id_instituicao =  ''; 
    
 $scope.$on("setIdInstituicao",  function(events,idInstituicao) {          
    $scope.setIstituicao(idInstituicao);
 });
            
 $scope.setIstituicao =  function (idInstituicao){
     $scope.novaAvaliacao.id_instituicao = idInstituicao
      
 } 

  $scope.inserirAvaliacao = function(){      
         $scope.novaAvaliacao.id_usuario = loginService.getIdUsuario()
        avaliacaoService.getInsereAvaliacao($scope.novaAvaliacao).then(function (response){    
          $scope.novaAvaliacao.id_avaliacao = response.data;
          $scope.novaAvaliacao.id_avaliacao =  $scope.novaAvaliacao.id_avaliacao.replace(/[^0-9]/g,'')
          $scope.novaAvaliacao.id_avaliacao = parseInt($scope.novaAvaliacao.id_avaliacao);  
		  avaliacaoService.getInsereNota( $scope.novaAvaliacao).then(function (response){
              init();
              $rootScope.$broadcast('recarregarInformacoesInstituicao')
          }); 
		}); 
  }             
  
 var carregarDadosAvaliacao = function (){       
		avaliacaoService.getDadosAvaliacao($routeParams.id_avaliacao).then(function (response){ 
            
            $scope.avaliacao.titulo = response.data.titulo;
            $scope.avaliacao.descricao = response.data.descricao; 
            $scope.avaliacao.id_instituicao = response.data.id_instituicao; 
            
            instituicaoService.getDadosInstituicao(response.data.id_instituicao).then(function (response){
                $scope.instituicaoAvaliacao = response.data
                instituicaoService.getDadosVariavesInstituicao($scope.avaliacao.id_instituicao).then(function (response){
                    $scope.variaveisInstituicao = response.data                
                });
            });
            
            $scope.avaliacao.nota = response.data.nota;
            
            
		});
 }
 
  var init = function  (){
        loginService.isUserLoggedIn();    
        $scope.logado = loginService.getPassUser()
        
        $scope.novaAvaliacao = {
                                    id_usuario:loginService.getIdUsuario(),
                                    id_instituicao:id_instituicao,
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
    
  $scope.$on("setLogado",  function(events) {
     $scope.logado = loginService.getPassUser()
  });
    
  $scope.$on("setUnlogedAvaliacao",  function(events) {
     $scope.logado = '';
  });
    
});
