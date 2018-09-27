<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <!--<link rel="stylesheet" href="css/app.css" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="/../notes/app.php">


</head>
<body>
  <nav class="navbar navbar-inverse">

    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">

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
          <li class="{{ Request::is('notes') ? 'active' : '' }} dropdown ">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Notas<span class="sr-only">(current)</span></a>


            <ul class="dropdown-menu">
             @foreach ($groups as $group)
             <li><a href="groups/{{ $group->id }}/notes">{{ $group->name }}</a></li>
             @endforeach
           </ul>


         </li>

         <li class="{{ Request::is('notes/create') ? 'active' : '' }}"><a href="notes/create">Crear</a></li>

       </ul>


     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>

<div class="container">




 @yield('content') <!-- /.insertar contenido -->
    
</div>

<script src="js/app.js"></script>

@yield('scripts')
    
</body>
</html>