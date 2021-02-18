<!-- Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $mark->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $mark->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group col-md-6">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $mark->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('Description', 'Descripción:') !!}
    <p>{{ $mark->Description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mark->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mark->updated_at }}</p>
</div>

