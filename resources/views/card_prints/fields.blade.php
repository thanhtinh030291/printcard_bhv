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
    {!! Form::label('member_no', 'member_no:') !!}
    {!! Form::text('member_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Valid To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valid_from', 'valid_from') !!}
    {!! Form::text('valid_from', null, ['class' => 'form-control','id'=>'valid_to']) !!}
</div>

<!-- Plan Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valid_to', 'valid_to:') !!}
    {!! Form::text('valid_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_type', 'plan_type:') !!}
    {!! Form::text('plan_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Pos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('op', 'op:') !!}
    {!! Form::text('op', null, ['class' => 'form-control']) !!}
</div>

<!-- Hcm-Hn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt', 'dt:') !!}
    {!! Form::text('dt', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('co_payment', 'co_payment:') !!}
    {!! Form::text('co_payment', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('deductible', 'deductible:') !!}
    {!! Form::text('deductible', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('medical_check_up', 'medical_check_up:') !!}
    {!! Form::text('medical_check_up', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('waiting_period', 'waiting_period:') !!}
    {!! Form::text('waiting_period', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exclusion_1', 'exclusion_1:') !!}
    {!! Form::text('exclusion_1', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('exclusion_2', 'exclusion_2:') !!}
    {!! Form::text('exclusion_2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('type', 'type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('first_year', 'first_year:') !!}
    {!! Form::text('first_year', null, ['class' => 'form-control']) !!}
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
