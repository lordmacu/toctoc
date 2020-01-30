<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($maintenance->name) ? $maintenance->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('frequency') ? 'has-error' : ''}}">
    <label for="frequency" class="control-label">{{ 'Frequency' }}</label>
    <select name="frequency" class="form-control" id="frequency" >
    @foreach (json_decode('{"0":"Seleccione Frecuencia","1":"Anual","2":"Diaria","3":"Semanal","4":"Mensual","5":"Bimensual","6":"Cada 6 meses"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($maintenance->frequency) && $maintenance->frequency == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('frequency', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    <label for="model" class="control-label">{{ 'Model' }}</label>
    <input class="form-control" name="model" type="text" id="model" value="{{ isset($maintenance->model) ? $maintenance->model : ''}}" >
    {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    <label for="serie" class="control-label">{{ 'Serie' }}</label>
    <input class="form-control" name="serie" type="text" id="serie" value="{{ isset($maintenance->serie) ? $maintenance->serie : ''}}" >
    {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="text" id="price" value="{{ isset($maintenance->price) ? $maintenance->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('last_maintenance') ? 'has-error' : ''}}">
    <label for="last_maintenance" class="control-label">{{ 'Last Maintenance' }}</label>
    <input class="form-control" name="last_maintenance" type="text" id="last_maintenance" value="{{ isset($maintenance->last_maintenance) ? $maintenance->last_maintenance : ''}}" >
    {!! $errors->first('last_maintenance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"0":"Seleccione Estado","1":"Operativo","2":"Da\u00f1ado","3":"En mantenimiento"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($maintenance->status) && $maintenance->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($maintenance->description) ? $maintenance->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
