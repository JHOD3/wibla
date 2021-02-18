<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Slug</th>
        <th>Descripcion</th>
        <th>Full-Acceso</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $key => $roles)
            <tr>
                <td>{{ $roles->name }}</td>
                <td>{{ $roles->slug }}</td>
                <td>{{ $roles->Description }}</td>
                <td>{{ $roles->full_access }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $roles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$roles->id]) }}" class='btn btn-default btn-xs'><i  class="fas fa-eye"></i></a>
                        <a href="{{ route('roles.edit', [$roles->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                        @if($key != 0)
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro que quieres eliminar este resgistro?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
