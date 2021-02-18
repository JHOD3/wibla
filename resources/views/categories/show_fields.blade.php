<!-- Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $category->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group col-md-6">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $category->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('Description', 'Descripción:') !!}
    <p>{{ $category->Description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $category->updated_at }}</p>
</div>

