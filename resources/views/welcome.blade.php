@extends('layouts.app')

@section('title')
	{{  config('app.name') }}
@endsection

@section('content')

  <br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Proyecto en Desarrollo Libreta de Notas</h3></div>
				<div class="panel-body">
					<ul>
                     <li type="disc">Notas de 140 caracteres.</li>
                    </ul>
				</div>
				
			</div>	
		</div>
	</div>
</div>	
@endsection