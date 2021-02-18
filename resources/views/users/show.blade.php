@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detalles del usuario</h1>
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
                    @include('users.show_fields')
                    <a href="{!! route('users.index') !!}" class="btn btn-default col-md-1">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
