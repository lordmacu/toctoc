<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($meeting->title) ? $meeting->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_end_meeting') ? 'has-error' : ''}}">
    <label for="start_end_meeting" class="control-label">{{ 'Start End Meeting' }}</label>
    <input class="form-control" name="start_end_meeting" type="text" id="start_end_meeting" value="{{ isset($meeting->start_end_meeting) ? $meeting->start_end_meeting : ''}}" >
    {!! $errors->first('start_end_meeting', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($meeting->description) ? $meeting->description : ''}}" required>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
