
<!DOCTYPE html>
<html>
<head>
    <title>Editar Nota {{ $note->title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>

<nav class="navbar navbar-default">
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
        <li class="active"><a href="http://localhost/notes/public/notes">Notas<span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost/notes/public/contact">Contacto</a></li>
       
      </ul>
    
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">

<form action="/notes/{{ $note->id }}" method="POST" role="form">

	{{ method_field('PATCH') }}

	{{ csrf_field() }}

	<legend>Editar Nota</legend>

  @if ($errors->any())
  <div class="alert alert-danger">
     <ul>
        @foreach ($errors->all() as $error)

         <li> {{ $error }} </li>

        @endforeach
       </ul>
    </div>
    @endif

	<div class"form-group">
		<label for="">Titulo</label>
		<input name="title" value="{{ $note->title }}" type="text" class="form-control" id="" placeholder="Escriba un Titulo">
	</div>

	<div class"form-group">
		<label for="">Contenido</label>
		<textarea name="body" type="text" class="form-control" id="" placeholder="Escriba el contenido">{{ $note->body }} </textarea>
	</div>

	<div class="checkbox">
		<label>

			<input type="hidden" name="important" value="0">
			<input type="checkbox" value="1" name="important" {{ $note->isImportant() ? 'checked' : '' }}>
			Es Importante
		</label>
	</div>

	<button type="submit" class="btn btn-primary">Actualizar</button>

</form>	
    
</div>

<script src="../js/app.js"></script>
    
</body>
</html>

