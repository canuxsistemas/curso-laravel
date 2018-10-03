@extends('layouts.app')

@section('title')
	Crear Nota
@endsection

@section('content')
 
<div class="row">

    <div class="col-xs-12 col-md-5 col-lg-6">
<form action="/notes" method="POST" role="form">
    {{ csrf_field() }}
    <legend>
        Nueva Nota
    </legend>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

	@include('../notes/_form')
    <button class="btn btn-primary btn-sm" type="submit">
        Crear
    </button>
</form>
</div>
</div>
@endsection
