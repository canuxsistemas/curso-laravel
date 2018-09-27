<div class"form-group"="">
    <label for="">
        Titulo
    </label>
    <input class="form-control" id="" name="title" placeholder="Escriba un Titulo" type="text" value="{{ old('title', isset($note) ? $note->title : '') }}">
    </input>
</div>
<div class"form-group"="">
    <label for="">
        Contenido
    </label>
    <textarea class="form-control" id="" name="body" placeholder="Escriba el contenido" type="text">{{ old('body', isset($note) ? $note->body : '') }}</textarea>
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