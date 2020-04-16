<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Policy No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('policy_no', 'Policy No:') !!}
    {!! Form::text('policy_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Valid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('text_valid', 'Text Valid:') !!}
    {!! Form::text('text_valid', null, ['class' => 'form-control']) !!}
</div>

<!-- Valid To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valid_to', 'Valid To:') !!}
    {!! Form::date('valid_to', null, ['class' => 'form-control','id'=>'valid_to']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#valid_to').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Plan Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_type', 'Plan Type:') !!}
    {!! Form::text('plan_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode', 'Barcode:') !!}
    {!! Form::text('barcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Pos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos', 'Pos:') !!}
    {!! Form::text('pos', null, ['class' => 'form-control']) !!}
</div>

<!-- Hcm-Hn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hcm_hn', 'Hcm Hn:') !!}
    {!! Form::text('hcm_hn', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Created User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_user', 'Created User:') !!}
    {!! Form::text('created_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Update User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('update_user', 'Update User:') !!}
    {!! Form::text('update_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Remember Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_remember', 'Name Remember:') !!}
    {!! Form::text('name_remember', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cardPrints.index') }}" class="btn btn-default">Cancel</a>
</div>
