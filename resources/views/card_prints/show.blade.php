@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Card Print
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('card_prints.show_fields')
                    <a href="{{ route('cardPrints.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="{{asset('js/JsBarcode.all.min.js')}}"></script>
<script>
    var barcode = $('#value_barcode').text();
    barcode = barcode.replace(/(\*)/gm,"");
    JsBarcode("#barcode", barcode , {
        width: 1,
        height:40,
        fontSize:10
    });
</script>
@endpush
