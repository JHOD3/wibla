@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detalles del permiso</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="card p-4">
                    @include('permissions.show_fields')
                    <a href="{{ route('permissions.index') }}" class="btn btn-default  col-md-1">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
