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
   

      
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
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