<div class="card p-4 col-12">
    <div class="row">
        <!-- Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Sub Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('sub_name', 'Sub Nombre:') !!}
            {!! Form::text('sub_name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Category Id Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('category_id', 'Categoria:') !!}
            {!! Form::select('category_id', $listCategories, null, ['class' => 'form-control']) !!}
        </div>

        <!-- Mark Id Field -->
        <div class="col-md-6">
            <div class="form-group col-sm-6">
                {!! Form::label('mark_id', 'Marca:') !!}
                {!! Form::select('mark_id', $listMarks, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('modelo', 'Modelo:') !!}
                {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="card p-4 col-12">
    <div class="row">
        <!-- Text Additional Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('text_additional', 'Texto Adicional:') !!}
            {!! Form::text('text_additional', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Precio Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('precio', 'Precio:') !!}
            {!! Form::text('precio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<pre>

</pre>
<div class="card p-4 col-12">
    <div class="row">
        <!-- Property Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('property', 'Caracteristicas:') !!}
            <div class="row">
                <div class="col-6" id="property_name">
                    <small>Nombre</small>
                    @foreach(array_chunk($product->property,2)[0] as $key => $name)
                        <input type="text" name="property[]" value="{{$name}}" class="form-control mt-2 mover_remove_{{$key}}" required>
                    @endforeach
                </div>
                <div class="col-6" id="property_value">
                    <small>Valor</small>
                    @foreach(array_chunk($product->property,2)[1] as $key => $name)
                        <input type="text" name="property[]" value="{{$name}}" class="form-control mt-2 mover_remove_{{$key}}" required>
                        @if($key>=1)
                            <a onclick="removeRow('mover_remove_{{$key}}')" class="mover_remove_{{$key}}" style="position: absolute;right: 0;margin-top: -42px;cursor: pointer;"><i class="fas fa-times-circle text-danger"></i></a>
                        @endif
                    @endforeach
                </div>
                <a class="col-1 ml-auto mr-2 mt-2 add_property">
                    <i class="fas fa-plus-circle text-primary" style="font-size: 30px;cursor: pointer;"></i>
                </a>
            </div>
        </div>
        <!-- Primary Image Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('primary_image', 'Imagen primaria:') !!}
            <input type="file" name="primary_image" accept="image/*" >
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div class="card p-4 col-12">
    <div class="row">
        <!-- Content Box Image Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('content_box_image', 'Content Box Image:') !!}
            <input type="file" name="content_box_image" accept="image/*" >
        </div>
        <div class="clearfix"></div>

        <!-- Slider Image Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('slider_image', 'Slider Image:') !!}
            <input type="file" name="slider_image[]" accept="image/*" multiple>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="card p-4 col-12">
    <div class="row">
        <!-- Box Content Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('box_content', 'Contenido de la Cajas') !!}
            <div class="row">
                <div class="col-md-12" id="box_content_name">
                    <small>Nombre</small>
                    @foreach($product->box_content as $key => $name)
                        <input type="text" name="box_content[]" class="form-control mt-2" value="{{$name}}" required>
                        @if($key>=1)
                            <a onclick="removeRow('remove_{{$key}}')" class="remove_{{$key}}" style="position: absolute;right: 0;margin-top: -42px;cursor: pointer;"><i class="fas fa-times-circle text-danger"></i></a>
                        @endif
                    @endforeach
                </div>
                <a class="col-1 ml-auto mr-2 mt-2 add_box_content">
                    <i class="fas fa-plus-circle text-primary" style="font-size: 30px;cursor: pointer;"></i>
                </a>
            </div>
        </div>

        <!-- Slug Field -->
        <div class="col-md-6 row">
            <div class="form-group col-sm-6">
                {!! Form::label('slug', 'Slug:') !!} <br>
                <small>Parte de la url del producto</small>
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('status_product', 'Status de producto:') !!} <br>
                <small>Destacado,Nuevo y oferta </small>
                {!! Form::select('status_product', $listStatus, null, ['class' => 'form-control']) !!}
            </div>

        </div>

        <!-- Title Description Field -->
        <div class="form-group col-12">
            {!! Form::label('title_description', 'Titulo de Descripcion:') !!}
            {!! Form::text('title_description', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('Description', 'Descripcion:') !!}
            {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancelar</a>
</div>
