@section('css')
    @include('layouts.datatables_css')
    <style>
      
        
       
    </style>
@endsection
<div class="table-responsive">
{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered',  'cellspacing'=>"0"]) !!}
</div>
@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush