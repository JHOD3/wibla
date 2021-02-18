@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Marcas</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="card p-4">
                    <div class="row" style="padding-left: 20px">
                        @include('marks.show_fields')
                        <a href="{{ route('marks.index') }}" class="btn btn-default">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
