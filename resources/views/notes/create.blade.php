@extends('layouts.show')

@section('title')
	Crear Nota
@endsection

@section('content')

<form action="../notes" method="POST" role="form">

	{{ csrf_field() }}

	<legend>Nueva Nota</legend>

	@include('../notes/_form')

	<button type="submit" class="btn btn-primary btn-sm">Crear</button>

</form>	
@endsection
