<div class"form-group">
		<label for="">Titulo</label>
		<input name="title" value="{{ old('title', isset($note) ? $note->title : '') }}" type="text" class="form-control" id="" placeholder="Escriba un Titulo">
	</div>

	<div class"form-group">
		<label for="">Contenido</label>
		<textarea name="body" type="text" class="form-control" id="" placeholder="Escriba el contenido">
		{{ old('body', isset($note) ? $note->body : '') }} </textarea>
	</div>

	<div class="checkbox">
		<label>
			<input type="hidden" name="important" value="0">
			<input type="checkbox" value="1" name="important"

				@if (!is_null(old('important')))
					{{ old('important') == 1 ? 'cheked' : '' }}
				@else
					@isset ($note)
						{{ $note->isImportant() ? 'checked' : '' }}	
				    @endif
				@endif    
			 >
			Es Importante
		</label>
	</div>

	