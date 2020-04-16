@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Import  Card Print Excel or CSV to Database
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cardPrints.store', 'files'=>true]) !!}

                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import  Data</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
