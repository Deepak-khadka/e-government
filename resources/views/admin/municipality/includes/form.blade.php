
<label class="col-sm-1 col-form-label is_required">State </label>

<div class="col-sm-3">
    {{ Form::select('state', config('neputer.province') , null, ['class'=>'form-control', 'required','id'=>'state_dropdown']) }}

    @if($errors->has('state'))
        <label for="state" class="has-error"> {{ $errors->first('state') }}</label>
    @endif
</div>


<label class="col-sm-1 col-form-label is_required">District </label>

<div class="col-sm-3">
    {{ Form::select('district_id', [] , null , ['class'=>'form-control','id'=>'district_value', 'required']) }}

    @if($errors->has('district_id'))
        <label for="district" class="has-error"> {{ $errors->first('district_id') }}</label>
    @endif
</div>

<label class="col-sm-1 col-form-label is_required">Municipality </label>

<div class="col-sm-3">
    {{ Form::text('municipality', null , ['class'=>'form-control', 'required']) }}

    @if($errors->has('municipality'))
        <label for="municipality" class="has-error"> {{ $errors->first('municipality') }}</label>
    @endif
</div>

