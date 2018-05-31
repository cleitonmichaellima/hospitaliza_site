<nav class="navbar navbar-light bg-light justify-content-between  col col-sm-12 navBarPrincipal">
    <a class="navbar-brand logo">
        <img src="img/logo_hospitaliza.png" width="50%" style='float:left;'>
    </a>
    <span class="form-inline">			
        <input id="barraProcurarNav"  ng-model="novoTermo" type="text" class='form-control'>				
        <a href='#!/search/{{novoTermo}}'>
            <button class='btn btn-primary btn-sm' id="btnProcurarNav" > Procurar </button>
        </a>	
    </span>
    <span class="form-inline">
        <button class="btn btn-outline-secondary" type="button" id="btnCadastreseInicial" data-toggle='modal' data-target="#modalCadastre">Cadastre-se</button>	
        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target="#modalLogin">Entrar</button>
    </span>
</nav>		