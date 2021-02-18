
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nonbre:') !!}
    <p>{{ $permissions->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $permissions->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Descripción:') !!}
    <p>{{ $permissions->Description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $permissions->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Modificado:') !!}
    <p>{{ $permissions->updated_at }}</p>
</div>

