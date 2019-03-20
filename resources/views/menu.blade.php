 <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CMS</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artigos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                         			
          		   <li><a href="{{ url('./Principal')}}">Pagina Principal </a></li>
                   <li><a href="{{ url('./Estatistica')}}"> Estatistica</a></li>
            	   <li><a href="{{ url('./Consulta')}}"> Consulta</a></li>
                      <ul><a href="{{ url('./Consulta/Doador')}}">Doador</a></ul>
                      <ul><a href="{{ url('./Consulta/Paciente')}}">Paciente</a></ul>
                      <ul><a href="{{ url('./Consulta/Doacao')}}">Doação</a></ul>
                   <li><a href="{{ url('./Qualidade')}}"> Qualidade </a></li>
                   <li><a href="{{ url('./')}}"> Sair</a></li>
                  
                  </ul>
              </li>
          </ul>
      </div>
    </div>
</nav>