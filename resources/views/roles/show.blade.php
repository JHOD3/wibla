@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detalles del Roles</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="card p-4">
                    <div class="row">
                        @include('roles.show_fields')
                    </div>
                    <a href="{{ route('roles.index') }}" class="btn btn-default col-md-1">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
