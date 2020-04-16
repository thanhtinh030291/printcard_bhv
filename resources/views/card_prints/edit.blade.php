@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Card Print
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cardPrint, ['route' => ['cardPrints.update', $cardPrint->id], 'method' => 'patch']) !!}

                        @include('card_prints.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection