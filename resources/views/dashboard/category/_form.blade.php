{{--  Falsificacion de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="publication" id="publication"
    placeholder="Nombre publicación" value="{{ old('publication', $post -> publication) }}">
</div>
<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revisión</option>
    </select>
</div>
<div class="form-control">
    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>

</div>