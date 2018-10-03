@extends('layouts.app')

@section('title')
	Nota: {{ $note->title }}
@endsection

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h3>{{ $note->title }}</h3></div>
				<div class="panel-body">
					{{ $note->body }}
				</div>
				<p><a href="{{ $note->id }}/edit" class="btn btn-primary btn-sm btn-center">Editar</a></p>	
			</div>	
		</div>
	</div>
</div>	

@endsection
