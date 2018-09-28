<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <!--<link rel="stylesheet" href="css/app.css" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
 


</head>
<body>
  <nav class="navbar navbar-inverse col-xs-12 col-lg-12">
    
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">
       <img class="" src="img/logo.png" border="0" alt="logo Diseñado por Canux" width="50" height="50">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/notes/public/">{{ config('app.name') }}</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="../notes" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">Archivo</a>

            <ul class="dropdown-menu">
              <li class="{{ Request::is('/notes/create') ? 'active' : '' }}"><a href="notes/create">Nueva Nota</a></li>
              <li><a href="groups/create">Nuevo Grupo</a></li>
           </ul>  
       </li>

        <li class="{{ Request::is('notes') ? 'active' : '' }}"><a href="notes">ver</a></li>
        


    </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

 @yield('content') <!-- /.insertar contenido -->
    
</div>

<footer>
    <div class="container textfooter">

       Libreta de Notas - Diseñado por Canux
    </div>
</footer> 

<script src="js/app.js"></script>

@yield('scripts')
    
</body>
</html>