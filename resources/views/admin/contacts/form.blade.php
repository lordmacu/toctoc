<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($contact->name) ? $contact->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    <label for="last_name" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" name="last_name" type="text" id="last_name" value="{{ isset($contact->last_name) ? $contact->last_name : ''}}" >
    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Teléfono' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($contact->phone) ? $contact->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($contact->cargo) ? $contact->cargo : ''}}" >
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
    <label for="area" class="control-label">{{ 'Area Asociada' }}</label>
    <select name="area" class="form-control" id="area" >
    @foreach (json_decode('{"0":"Seleccione Area","1":"T\u00e9cnica","2":"Administrativa","3":"General","4":"Comercial"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($contact->area) && $contact->area == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Descripción' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($contact->description) ? $contact->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
