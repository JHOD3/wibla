<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Slug</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><img src="uploads/{{$product->primary_image}}" style="width: 75px;height: 75px;"></td>
                <td>{{ $product->categoria }}</td>
                <td>{{ $product->marca }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->precio }}</td>
                <td>{{ $product->slug }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$products->links()}}
    </div>
</div>
