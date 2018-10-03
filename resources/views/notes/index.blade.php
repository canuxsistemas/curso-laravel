@extends('layouts.app')

@section('title')
  Lista de Notas
@endsection

@section('content')
<br>
<div class="row">



 @foreach ($notes as $note)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="container d-block p-2 bg-dark text-white">

                    <h3>{{ $note->title }}</h3>

                </div>

                <div class="panel-body">
                    {{ $note->body }}
                </div>

             <span class="label label-default text-right"></span>
                  <div class="panel-body" align="right"> 
                    <div class="">
                        <form action="/notes/{{ $note->id }}" method="POST">
                             {{ method_field('DELETE') }}
                             {{ csrf_field() }}
                          <a href="{{ $note->id }}/edit" class=""><img src="/img/editar.png" width="30" height="25"></a>
                           <button class="btn btn-delete" type="button"><img src="/img/papelera.png" width="15" height="20">  
                           </button>
                            </form>  
                    </div>
                    <div>  
                            
        </div>
                 </div>
                
            </div>  
        </div>
    </div>
</div>  
@endforeach 

    <div class="col-md-2">
     
        <h4>Grupo de Notas</h4>

        <ul class="list-group">
                <!--<li class="list-group-item"><a href="/groups/create">Crear</a></li>-->
                <li class="list-group-item"><a href="/notes/all">Todas</a></li>
                <li class="list-group-item"><a href="/notes/null">Ninguno</a></li>
            @foreach ($groups as $group)
                <li class="list-group-item"><a href="/groups/{{ $group->id }}/notes">{{ $group->name }}</a></li>
            @endforeach    
        </ul> 
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

 
