@extends('layouts.app')

@section('title')
	Crear Nota
@endsection

@section('content')


<form action="../notes" method="POST" role="form">
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
@endsection
