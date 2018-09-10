@extends('layouts.app')

@section('title')
  Lista de Notas
@endsection

@section('content')

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

                    {{ $note->title }}

                    @if ($note->isImportant())

            *

                    @endif

                      
                    </a>

          </td>
        
         </tr>          

  @endforeach 
  </ul>

@endsection
