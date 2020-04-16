@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Card Prints</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('cardPrints.create') }}">Create</a>
        </h1>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => ['cardPrints.pdf_remember_name']]) !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::text('name_remember', $latest_name_remember,['class' => ' form-control ', 'readonly']) !!}
                    </div>
                    
                    <span class="col-md-4 input-group-btn">
                        <button type="submit" class="btn btn-default">Export PDF</button>
                    </span>
                </div>
                {!! Form::close() !!}
                <br>
                    @include('card_prints.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

