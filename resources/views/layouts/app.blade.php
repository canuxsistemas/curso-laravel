<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="css/app.css" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
 


</head>
<body>
<nav class="navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       
       <a class=" logo" href="/notes/all">
        <img class="logo" alt="Brand" src="/img/logo.png" width="50" height="50">
      </a>
   

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::check())
         <ul class="nav navbar-nav">
        <li class="{{ Request::is('notes/create') ? 'active' : '' }}"><a href="/notes/create">Escribir <span class="sr-only">(current)</span></a></li>
      </ul>
      @endif

                        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

    </div>
  </div>
</nav>

<div class="container">

 @yield('content') <!-- /.insertar contenido -->
    
</div>

<footer>
    <div class="container textfooter">

       Libreta de Notas - <a href="https://www.instagram.com/_canux/"> @_Canux </a>
    </div>
</footer> 

<script src="js/app.js"></script>

@yield('scripts')
    
</body>
</html>