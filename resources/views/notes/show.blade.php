@extends('layouts.app')

@section('title')
	Nota: {{ $note->title }}
@endsection

@section('content')

<div class="jumbotron">
<h1> {{ $note->title }} </h1>
<div class="panel panel-default">
  <div class="panel-body"><p class="lead" >{{ $note->body }}</p></div>
</div>

<p><a href="{{ $note->id }}/edit" class="btn btn-primary btn-sm">Editar</a></p>
</div>



@endsection
