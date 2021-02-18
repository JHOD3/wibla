@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Producto</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box box-primary">
            @include('products.show_fields')
        </div>
    </div>
@endsection
