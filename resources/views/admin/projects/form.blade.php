<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Título' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($project->title) ? $project->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_end_project') ? 'has-error' : ''}}">
    <label for="start_end_project" class="control-label">{{ 'Inicio y final del proyecto' }}</label>
    <input class="form-control daterange" name="start_end_project" type="text" id="start_end_project" value="{{ isset($project->start_end_project) ? $project->start_end_project : ''}}" >
    {!! $errors->first('start_end_project', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('budget') ? 'has-error' : ''}}">
    <label for="budget" class="control-label">{{ 'Presupuesto' }}</label>
    <input class="form-control" name="budget" type="text" id="budget" value="{{ isset($project->budget) ? $project->budget : ''}}" >
    {!! $errors->first('budget', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Descripción' }}</label>
    <textarea class="form-control editor" rows="5" name="description" type="textarea" id="description" required>{{ isset($project->description) ? $project->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
