<div class="form-group row ">

    {{-- First Name --}}
    <label class="col-sm-1 col-form-label is_required">First Name  </label>

    <div class="col-sm-3">
         {{ Form::text('first_name',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('first_name'))
            <label class="has-error" for="first_name">{{ $errors->first('first_name') }}</label>
        @endif
    </div>

    {{-- Middle Name--}}
    {{ Form::label('Middle Name', null, ['class'=>'col-sm-1 col-form-label','required']) }}

    <div class="col-sm-3">
         {{ Form::text('middle_name',null , ['class'=>'form-control']) }}
    </div>

    {{-- Last Name --}}
    <label class="col-sm-1 col-form-label is_required">Last Name  </label>
    <div class="col-sm-3">
         {{ Form::text('last_name',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('last_name'))
            <label for="last_name" class="has-error"> {{ $errors->first('last_name') }}</label>
        @endif
    </div>
</div>

<div class="form-group row">

    <label class="col-sm-1 col-form-label is_required">State </label>

    <div class="col-sm-3">
        {{ Form::text('state',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('state'))
            <label for="state" class="has-error"> {{ $errors->first('state') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Zone </label>

    <div class="col-sm-3">
        {{ Form::text('zone', null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('zone'))
            <label for="zone" class="has-error"> {{ $errors->first('zone') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">District </label>

    <div class="col-sm-3">
        {{ Form::text('district',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('district'))
            <label for="district" class="has-error"> {{ $errors->first('district') }}</label>
        @endif
    </div>

</div>

<div class="form-group row">

    <label class="col-sm-1 col-form-label is_required">Tole </label>

    <div class="col-sm-3">
        {{ Form::text('tole',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('tole'))
            <label for="tole" class="has-error"> {{ $errors->first('tole') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Phone </label>

    <div class="col-sm-3">
        {{ Form::number('age', null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('age'))
            <label for="age" class="has-error"> {{ $errors->first('age') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Date Of Birth </label>

    <div class="col-sm-3">
        {{ Form::date('date_of_birth',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('date_of_birth'))
            <label for="date_of_birth" class="has-error"> {{ $errors->first('date_of_birth') }}</label>
        @endif
    </div>

</div>

<div class="form-group row">

    <label class="col-sm-1 col-form-label is_required">Ward No </label>

    <div class="col-sm-3">
        {{ Form::number('ward_no',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('ward_no'))
            <label for="ward_no" class="has-error"> {{ $errors->first('ward_no') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Phone </label>

    <div class="col-sm-3">
        {{ Form::text('phone', null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('phone'))
            <label for="phone" class="has-error"> {{ $errors->first('phone') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Date Of Birth </label>

    <div class="col-sm-3">
        {{ Form::date('date_of_birth',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('date_of_birth'))
            <label for="date_of_birth" class="has-error"> {{ $errors->first('date_of_birth') }}</label>
        @endif
    </div>

</div>

<div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-6"><select class="form-control m-b" name="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </div>
</div>
