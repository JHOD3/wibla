<div class="table-responsive">
    <table class="table" id="marks-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Descripción</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($marks as $mark)
            <tr>
                <td>{{ $mark->name }}</td>
            <td>{{ $mark->slug }}</td>
            <td>{{ $mark->Description }}</td>
                <td>
                    {!! Form::open(['route' => ['marks.destroy', $mark->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('marks.show', [$mark->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{{ route('marks.edit', [$mark->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
