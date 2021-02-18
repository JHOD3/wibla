@extends('layouts.app')
@section('third_party_stylesheets')
    <link rel="stylesheet" href="{{asset('css/imageuploadify.min.css')}}">
@endsection
@section('content')
    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Producto</h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

                {!! Form::open(['route' => 'products.store', 'files' => true , 'class'=>'col-12 row']) !!}

                    @include('products.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('third_party_scripts')
<script src="{{asset('js/imageuploadify.js')}}"></script>
<script>
    $('input[type="file"]').imageuploadify();

    $('.add_box_content').click(function (event){
           event.preventDefault();
           let id = Math.floor( Math.random() * (9999 - 1000 ) + 9999);
           $("#box_content_name").append('<input type="text" name="box_content[]" class="form-control mt-2 '+id+'" required> <a onclick="removeRow('+id+')" class="'+id+'" style="position: absolute;right: 0;margin-top: -42px;cursor: pointer;"><i class="fas fa-times-circle text-danger"></i></a>' );
       });

       $('.add_property').click(function (event){
           event.preventDefault();
           let id = Math.floor( Math.random() * (9999 - 1000 ) + 9999);
           $("#property_name").append('<input type="text" name="property[]" class="form-control mt-2 '+id+'" required>');
           $("#property_value").append('<input type="text" name="property[]" class="form-control mt-2 '+id+'" required> <a onclick="removeRow('+id+')" class="'+id+'" style="position: absolute;right: 0;margin-top: -42px;cursor: pointer;"><i class="fas fa-times-circle text-danger"></i></a>');
       });

       function removeRow(id) {
           $('.'+id).remove();
       }

</script>
@endsection
