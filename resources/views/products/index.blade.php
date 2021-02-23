@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Productos</h1>
                </div>
                <!-- /.col -->
                @can('haveaccess', 'products.create')
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="btn btn-primary ml-auto mr-0" href="{{ route('products.create') }}">Añadir nuevo</a>
                    </ol>
                </div>
                @endcan
            </div>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="card p-4">
                    @include('products.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

