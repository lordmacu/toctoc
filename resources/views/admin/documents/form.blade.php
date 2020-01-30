<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($document->title) ? $document->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('document_category') ? 'has-error' : ''}}">
    <label for="document_category" class="control-label">{{ 'Document Category' }}</label>
    <input class="form-control" name="document_category" type="text" id="document_category" value="{{ isset($document->document_category) ? $document->document_category : ''}}" >
    {!! $errors->first('document_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('size') ? 'has-error' : ''}}">
    <label for="size" class="control-label">{{ 'Size' }}</label>
    <input class="form-control" name="size" type="text" id="size" value="{{ isset($document->size) ? $document->size : ''}}" >
    {!! $errors->first('size', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="{{ isset($document->file) ? $document->file : ''}}" >
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="file" id="user_id" value="{{ isset($document->user_id) ? $document->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
