@extends('layouts.app')

@section('title')
	Crear Grupo
@endsection

@section('content')

<div class="row">

    <div class="col-xs-12 col-md-3 col-lg-4">
<form action="../groups" method="POST" role="form">
    {{ csrf_field() }}
    <legend>
        Nuevo Grupo
    </legend>
   
   @if ($errors->any())
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach    
        </ul>    

    </div>    
   @endif

	@include('../groups/_form')
    <br>
    <button class="btn btn-primary btn-sm" type="submit">
        Crear
    </button>
</form>
</div>
</div>
@endsection

