<div class="card p-4">
   <div class="row">
        <!-- Id Field -->
        <div class="form-group col-md-6">
            {!! Form::label('id', 'Id:') !!}
            <p>{{ $product->id }}</p>
        </div>

        <!-- Category Id Field -->
        <div class="form-group col-md-6">
            {!! Form::label('category_id', 'Categoria:') !!}
            <p>{{ $product->categoria }}</p>
        </div>

        <div class="col-md-6">
            <!-- Mark Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('mark_id', 'Marca:') !!}
                <p>{{ $product->marca }}</p>
            </div>
            <!-- Mark Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('modelo', 'Modelo:') !!}
                <p>{{ $product->modelo }}</p>
            </div>
        </div>

        <!-- Name Field -->
        <div class="form-group col-md-6">
            {!! Form::label('name', 'Nombre:') !!}
            <p>{{ $product->name }}</p>
        </div>
   </div>
</div>

<div class="card p-4">
    <div class="row">
        <!-- Sub Name Field -->
        <div class="form-group col-md-6">
            {!! Form::label('sub_name', 'Sub nombre:') !!}
            <p>{{ $product->sub_name }}</p>
        </div>

        <!-- Text Additional Field -->
        <div class="form-group col-md-6">
            {!! Form::label('text_additional', 'Texto adicional:') !!}
            <p>{{ $product->text_additional }}</p>
        </div>

        <!-- Precio Field -->
        <div class="form-group col-md-6">
            {!! Form::label('precio', 'Precio:') !!}
            <p>{{ $product->precio }}</p>
        </div>
        <!-- Slug Field -->
        <div class="form-group col-md-6">
            {!! Form::label('slug', 'Slug:') !!}
            <p>{{ $product->slug }}</p>
        </div>
    </div>
</div>

<div class="card p-4">
    <div class="row">
        <!-- Property Field -->
        <div class="form-group col-md-6">
            {!! Form::label('property', 'Caracteristicas:') !!}
             <table class="table table-striped table-bordered">
                 @for($i=0; $i<count(array_chunk($product->property,2)[0]); $i++)
                     <tr>
                         <td>{{array_chunk($product->property,2)[0][$i]}}</td>
                         <td>{{array_chunk($product->property,2)[1][$i]}}</td>
                     </tr>
                 @endfor
             </table>
        </div>

        <!-- Primary Image Field -->
        <div class="form-group col-md-6">
            {!! Form::label('primary_image', 'Imagen primaria:') !!}
            <img src="{{url('/')}}/uploads/{{$product->primary_image}}" style="width: 350px;height: 350px" >
        </div>

        <!-- Content Box Image Field -->
        <div class="form-group col-md-6">
            {!! Form::label('content_box_image', 'Contenido de la caja imagen:') !!}
            <img src="{{url('/')}}/uploads/{{$product->content_box_image}}" style="width: 350px;height: 350px" >
        </div>

        <!-- Slider Image Field -->
        <div class="form-group col-md-6">
            {!! Form::label('slider_image', 'Slider Imagen:') !!}
            <div>
                @foreach($product->slider_image as $imagen)
                    <img src="{{url('/')}}/uploads/{{$imagen}}" style="width: 100px;height: 100px" >
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="card p-4">
    <div class="row">
        <!-- Box Content Field -->
        <div class="form-group col-md-6">
            {!! Form::label('box_content', 'Contenido de caja:') !!}
            <table class="table table-striped table-bordered">
                @foreach($product->box_content as $conten_box)
                    <tr>
                        <td>{{$conten_box}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('box_content', 'Status de producto:') !!}
            <p>{{$product->status_product}}</p>
            </table>
        </div>


        <!-- Title Description Field -->
        <div class="form-group col-md-6">
            {!! Form::label('title_description', 'Titulo descripción:') !!}
            <p>{{ $product->title_description }}</p>
        </div>

        <!-- Description Field -->
        <div class="form-group col-md-12">
            {!! Form::label('Description', 'Descripción:') !!}
            <p>{{ $product->Description }}</p>
        </div>

        <!-- Created At Field -->
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'Creado:') !!}
            <p>{{ $product->created_at }}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'Actualizado:') !!}
            <p>{{ $product->updated_at }}</p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-default">Atras</a>
    </div>
</div>