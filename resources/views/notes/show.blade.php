@extends('layouts.show')

@section('title')
	Nota: {{ $note->title }}
@endsection

@section('content')

<h1>{{ $note->title }}</h1>
<p>{{ $note->body }}</p>

@endsection
