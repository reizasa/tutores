<!--    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>      -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/font-awesome.min.css')}}">

<body>
    
    <nav id="me" class="navbar navbar-default mega-nav">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="MainMenu">
            <ul class="nav navbar-nav menu-list">

                <li><a href="{{url('#')}}">Consulta tu reporte</a></li>
                <li><a href="{{url('#')}}">Noticias</a></li>
                <li><a href="{{url('#')}}">Directorio</a></li>
                <li><a href="{{url('#')}}">Contacto</a></li>
               
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">ıllı Iniciar Sesión ıllı</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            ıllı {{ Auth::user()->name }} ıllı  <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
                    </ul>
                </li>
            @endif



            </ul>
            <form id="mega-search" class="navbar-form navbar-right">
                <div class="input-group">
                    <!--<input type="text" class="form-control" placeholder="Buscar..."
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>-->
                </div>
            </form>
        </div>
        </div>
    </nav>
    <main role="contents">

        <div class="darkness"></div>
    </main>
    <footer>
        <div class="darkness"></div>
    </footer>
</body>
