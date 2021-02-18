<input type="hidden" name="id" value="{{$roles->id}}">
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Descripción:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Full-Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_access', 'Full Acceso:') !!}
    {!! Form::select('full_access', array('Si' => 'Si', 'No' => 'No') ,null, ['class' => 'form-control']) !!}
</div>
<div class="border-bottom my-4 col-12 d-flex align-items-center">
    <h3 title="hola">Permisos</h3>
    <i class="ml-3 fas fa-question-circle" title="Asigna los permisos necesarios a este rol y luego agregar este rol al usuario que desees. Debes tener en cuenta que un rol puede se asignado un muchos usuario."></i>
</div>
<div class="row d-flex col-md-12">
    @foreach($list_permissions as $value)
        <div class="form-group col-12 col-md-6">
            {!! Form::checkbox('permissions[]', $value['id'], in_array($value['id'], $permissions_roles)); !!}
            {!! Form::label($value['id'], $value['name']) !!}
            <em>({{$value['Description']}})</em>
        </div>
    @endforeach
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancelar</a>
</div>
