<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($survey->title) ? $survey->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_end_question') ? 'has-error' : ''}}">
    <label for="start_end_question" class="control-label daterange">{{ 'Start End Question' }}</label>
    <input class="form-control" name="start_end_question" type="text" id="start_end_question" value="{{ isset($survey->start_end_question) ? $survey->start_end_question : ''}}" >
    {!! $errors->first('start_end_question', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('question') ? 'has-error' : ''}}">
    <label for="question" class="control-label">{{ 'Question' }}</label>
    <input class="form-control" name="question" type="text" id="question" value="{{ isset($survey->question) ? $survey->question : ''}}" >
    {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type_question') ? 'has-error' : ''}}">
    <label for="type_question" class="control-label">{{ 'Type Question' }}</label>
    <select name="type_question" class="form-control" id="type_question" >
    @foreach (json_decode('{"technology":"Simple","tips":"Multiple"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($survey->type_question) && $survey->type_question == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('type_question', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
