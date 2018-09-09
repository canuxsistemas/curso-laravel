@extends('layouts.show')

@section('title')
	Crear Nota
@endsection

@section('content')

<form action="../notes" method="POST" role="form">

	{{ csrf_field() }}

	<legend>Nueva Nota</legend>

	<div class"form-group">
		<label for="">Titulo</label>
		<input name="title" type="text" class="form-control" id="" placeholder="Escriba un Titulo">
	</div>

	<div class"form-group">
		<label for="">Contenido</label>
		<textarea name="body" type="text" class="form-control" id="" placeholder="Escriba el contenido"> </textarea>
	</div>

	<div class="checkbox">
		<label>
			<input type="checkbox" value="1" name="important">
			Es Importante
		</label>
	</div>

	<button type="submit" class="btn btn-primary">Crear</button>

</form>	
@endsection
