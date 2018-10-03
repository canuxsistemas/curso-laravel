@extends('layouts.app')

@section('title')
  Lista de Notas
@endsection

@section('content')
<br>
<div class="row">

    <div class="col-md-2">
     
        <h4>Grupo de Notas</h4>

        <ul class="list-group">
                <li class="list-group-item"><a href="/groups/create">Crear</a></li>
                <li class="list-group-item"><a href="/notes/all">Todas</a></li>
                <li class="list-group-item"><a href="/notes/null">Ninguno</a></li>
            @foreach ($groups as $group)
                <li class="list-group-item"><a href="/groups/{{ $group->id }}/notes">{{ $group->name }}</a></li>
            @endforeach    
        </ul> 
     </div>      

<div class="col-md-10">
    <table class="table table-hover">
<thead>
    <tr>
        <th>Lista de Notas:</th>
    </tr>
       
</thead>

<tbody>
    @foreach ($notes as $note)
    <tr class="">
        <td>
            <a href="{{ $note->id }}">
                <h4>
                    {{ $note->title }}
                </h4>
                @if ($note->isImportant())

        * Importante

                @endif
            </a>
        </td>
        <td>
            <form action="/notes/{{ $note->id }}" method="POST">
                {{ method_field('DELETE') }}
          {{ csrf_field() }}

                <button class="btn btn-delete" type="button"><img src="/img/papelera.png" width="15" height="20">
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>

</div>    



</section>






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

 
