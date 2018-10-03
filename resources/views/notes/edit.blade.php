@extends('layouts.app')

@section('title')
  Lista de Notas
@endsection

@section('content')

<form action="/notes/{{ $note->id }}" method="POST" role="form">

    {{ method_field('PATCH') }}

    {{ csrf_field() }}

    <legend>Editar Nota</legend>

  @if ($errors->any())
  <div class="alert alert-danger">
     <ul>
        @foreach ($errors->all() as $error)

         <li> {{ $error }} </li>

        @endforeach
       </ul>
    </div>
    @endif

    <div class"form-group">
        <label for="">Titulo</label>
        <input name="title" value="{{ $note->title }}" type="text" class="form-control" id="" placeholder="Escriba un Titulo">
    </div>

    <div class"form-group">
        <label for="">Contenido</label>
        <textarea name="body" type="text" class="form-control" id="" placeholder="Escriba el contenido">{{ $note->body }} </textarea>
    </div>

    <div class="form-group">
    <label for="">
        Tipo
    </label>
    <select class="form-control" name="group_id">
        <option value="">
            --Ninguno--
        </option>
        @foreach ($groups as $group)
        <option value="{{ $group->id }}">
            {{ $group->name }}
        </option>
        @endforeach
    </select>
   </div>

    <div class="checkbox">
        <label>

            <input type="hidden" name="important" value="0">
            <input type="checkbox" value="1" name="important" {{ $note->isImportant() ? 'checked' : '' }}>
            Es Importante
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>

</form> 
    
</div>
@endsection