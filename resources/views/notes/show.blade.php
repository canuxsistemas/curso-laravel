@extends('layouts.show')

@section('title')
	Nota: {{ $note->title }}
@endsection

@section('content')




<h1 class="text-primary"> {{ $note->title }} </h1>
<p class="lead text-info" >{{ $note->body }}</p>



<a href="{{ $note->id }}/edit" class="btn btn-primary btn-sm">Editar</a>

@endsection
