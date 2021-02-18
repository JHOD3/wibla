<div class="table-responsive">
    <table class="table" id="permissions-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Descripción</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permissions)
            <tr>
                <td>{{ $permissions->name }}</td>
            <td>{{ $permissions->slug }}</td>
            <td>{{ $permissions->Description }}</td>
                <td>
                    {!! Form::open(['route' => ['permissions.destroy', $permissions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissions.show', [$permissions->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{{ route('permissions.edit', [$permissions->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>

                        {{-- {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro que quieres eliminar este resgistro?')"]) !!} --}}

                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
