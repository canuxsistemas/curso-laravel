@extends('layouts.app')

@section('title')
	Crear Grupo
@endsection

@section('content')


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
@endsection
