    <!doctype html>
    <html lang="PT-BR">
        <head>
            <meta charset="utf-8" />
            <title>@yield('title')</title>
            <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')  }}" type="text/css" rel="stylesheet" media="screen"/> -->
            <link  href=".css/estilos.css"/>

        </head>
    <body>
      <div class="header">
        @yield('header')
            <h1> -colocar image e titulo pequeno --</h1>
       </div> 
     
      <div id="sidebar"> @yield('content')
 <nav class="navbar navbar-default" role="navigation">
 <div class="container">
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav" > <!--bolinhas pretado lado -->
       <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"> HOME <b class="caret"></b></a> 
           <li><a href="{{ url('./Principal')}}">Pagina Principal </a></li>
           <li>  <a href="{{ url('./Estatistica')}}"> Estatistica</a></li>
           <li> <a href="{{ url('./Consulta')}}"> Consulta</a></li>
                <ul><a href="{{ url('./Consulta/Doador')}}">Doador</a></ul>
                <ul><a href="{{ url('./Consulta/Paciente')}}">Paciente</a></ul>
                <ul><a href="{{ url('./Consulta/Doacao')}}">Doação</a></ul>
                <li><a href="{{ url('./Qualidade')}}"> Qualidade </a></li>
               <li> <a href="{{ url('./')}}"> Sair</a></li>
              </ul>
       </li>
    </ul>
  </div>
  </div>
</nav>


          <!--  <ul class="dropdown-menu">
                <li><a href="./Principal">Pagina Principal </a></li>
                <li><a href="/Estatistica"> Estatistica</a></li>
                <li><a href="/Consulta"> Consulta</a></li>
                      <ul><a href="/Consulta/Doador">Doador</a></ul>
                      <ul><a href="/Consulta/Paciente">Paciente</a></ul>
                      <ul><a href="/Consulta/Doacao">Doação</a></ul>
                <li><a href="/Qualidade"> Qualidade </a></li>
                <li><a href="/"> Sair</a></li>
            </ul>  -->
            <h1> -----------</h1>
         </div>
       
        <div id="footer">
            <h1> -------- </h1>
        </div>   
     
     </body>
    </html>




   
   
   