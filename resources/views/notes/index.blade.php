@extends('../layouts/app')

@section('title')
  Lista de Notas
@endsection

@section('content')

<div class="container">

<section class="main row"> 

<div class="col-xs-12 col-lg-9">   
<table class="table table-hover">
    <thead>
        <tr>
            <th>Lista de Notas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr class="active">
            <td>
                <a href="notes/{{ $note->id }}">
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
                    <button class="btn btn-danger btn-delete" type="button">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


</section>


</div>



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
