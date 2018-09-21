@extends('layouts.app')

@section('title')
  Lista de Notas
@endsection

@section('content')
<h1>LISTA DE NOTAS</h1>
<p>anotaciones personales de mis experiencias en el aprendizaje del 
framework LARAVEL,despliegues en HEROKU y control de versiones en GITHUB. </p>

  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        
       </tr>
    </thead>
    <tbody> 
 @foreach ($notes as $note)

        <tr class="active">
          <td >
                   <a href="notes/{{ $note->id }}">

                   <h4> {{ $note->title }} </h4>

                    @if ($note->isImportant())

            *

                    @endif

                      
                    </a>

          </td>
          <td>
            <form action="/notes/{{ $note->id }}" method="POST">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}

              <button type="button" class="btn btn-danger btn-delete">Eliminar</button>

            </form>

          </td>
        
         </tr>          

  @endforeach 
  </ul>

@endsection

@section('scripts')

  <script>
    
    $('.btn-delete').on('click', function(e) {

      if(confirm('¿Está seguro de borrar la nota?')) {

        $(this).parents('form:first').submit();

      }


    });

  </script>

@endsection
