<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal" ng-controller="navController">
    <a class="navbar-brand logo" href="/#!/">
        <img src="img/logo_hospitaliza.png" width="50%" style='float:left;'>
    </a>
    <span class="form-inline">			
        <input id="barraProcurarNav"  ng-model="novoTermo" type="text" class='form-control'>				
        <a href='#!/search/{{novoTermo}}'>
            <button class='btn btn-primary btn-sm' id="btnProcurarNav" > Procurar </button>
        </a>	
    </span>
    <span class="form-inline" ng-if='!usuarioLogado'>
        <button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
    </span>
    <span class="form-inline" ng-if='usuarioLogado' >     
     <div class="btn-group">
      <button type="button" class="btn btn-info">
          <i class="fa fa-user"></i> 
          {{nomeUsuario}}
      </button>
      <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#!/usuario/{{id_usuario}}" style='cursor:pointer;'>Dados Pessoais</a>             
        <div class="dropdown-divider"></div>
        <a style='cursor:pointer;' class="dropdown-item" data-toggle="modal" data-target="#modalFinalizarSessao"><i class='fa fa-power-off'></i> Sair</a>
      </div>
     </div>
    </span>
</nav>		