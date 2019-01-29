    <!doctype html>
    <html>
        <head>
                  <title>@yield('title')</title>
        </head>
        <body>
        

     <ul>
        <li><a href="/Principal"> Pagina Principal </a></li>
        <li><a href="/Estatistica"> Estatistica</a></li>
        <li><a href="/Consulta"> Consulta</a></li>
        <li><a href="/Qualidade"> Qualidade </a></li>
        <li><a href="/"> Sair</a></li>
    </ul>    


    @yield('content')


        </body>
    </html>
