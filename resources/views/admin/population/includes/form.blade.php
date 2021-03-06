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

    <label class="col-sm-1 col-form-label is_required">Date Of Birth </label>

    <div class="col-sm-3">
        {{ Form::date('date_of_birth',null , ['class'=>'form-control datepicker','id'=>'date_picker', 'required']) }}

        @if($errors->has('date_of_birth'))
            <label for="date_of_birth" class="has-error"> {{ $errors->first('date_of_birth') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Age </label>

    <div class="col-sm-3">
        {{ Form::number('age',null , ['class'=>'form-control', 'required','id'=>'age']) }}

        @if($errors->has('age'))
            <label for="age" class="has-error"> {{ $errors->first('age') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Sex </label>

    <div class="col-sm-3">
        {{ Form::select('sex', [null =>'Choose Gender','male'=>'Male','female'=>'Female','other'=>'Other'] ,null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('sex'))
            <label for="sex" class="has-error"> {{ $errors->first('sex') }}</label>
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

    <label class="col-sm-1 col-form-label is_required">Ward No </label>

    <div class="col-sm-3">
        {{ Form::number('ward_no',null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('ward_no'))
            <label for="ward_no" class="has-error"> {{ $errors->first('ward_no') }}</label>
        @endif
    </div>

    <label class="col-sm-1 col-form-label is_required">Phone </label>

    <div class="col-sm-3">
        {{ Form::text('phone', '+977' , ['class'=>'form-control required']) }}

        @if($errors->has('phone'))
            <label for="phone" class="has-error"> {{ $errors->first('phone') }}</label>
        @endif
    </div>

</div>

<div class="form-group row">
    <label class="col-sm-1 col-form-label is_required">Marital Status </label>

    <div class="col-sm-3">
        {{ Form::select('marital_status',[null=>'Choose Status','0'=>'Married','1'=>'Un-Married'],null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('marital_status'))
            <label for="marital_status" class="has-error"> {{ $errors->first('marital_status') }}</label>
        @endif
    </div>
    <label class="col-sm-1 col-form-label is_required">Education </label>

    <div class="col-sm-3">
        {{ Form::select('education_level',[null=>'Choose Education Status','primary'=>'Primary Education','lower'=>'Lower Secondary Education','secondary'=>'Secondary Education','senior_secondary'=>'Senior Secondary Education (HSEB)','bachelor'=>'Bachelor','master'=>'Master','phd'=>'PHD'],null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('education_level'))
            <label for="education_level" class="has-error"> {{ $errors->first('education_level') }}</label>
        @endif
    </div>
    <label class="col-sm-1 col-form-label is_required">Service </label>

    <div class="col-sm-3">
        {{ Form::select('service',[null=>'Choose Job Status','unemployment'=>'Unemployment','employment'=>'Employment'],null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('service'))
            <label for="service" class="has-error"> {{ $errors->first('service') }}</label>
        @endif
    </div>

   </div>

<div class="form-group row">


    <label class="col-sm-1 col-form-label is_required">Location </label>

    <div class="col-sm-3">
        {{ Form::select('present_location',['null'=>'Current Location','home'=>'Home','foreign'=>'Foreign'],null , ['class'=>'form-control', 'required']) }}

        @if($errors->has('present_location'))
            <label for="present_location" class="has-error"> {{ $errors->first('present_location') }}</label>
        @endif
    </div>

    <div id="citizen_number" class="col-sm-4">
        <div class="row">
            <label class="col-sm-3 col-form-label ">Citizen No </label>

            <div class="col-sm-9" id="citizen_number">
                {{ Form::text('citizenship_number',null , ['class'=>'form-control']) }}

                @if($errors->has('citizenship_number'))
                    <label for="citizenship_number" class="has-error"> {{ $errors->first('citizenship_number') }}</label>
                @endif
            </div>
        </div>

    </div>


     {{ Form::label('Security No.',null ,['class'=>'col-sm-1 col-form-label']) }}

     <div class="col-sm-3">
        {{ Form::text('security_number', null , ['class'=>'form-control']) }}

        @if($errors->has('security_number'))
            <label for="security_number" class="has-error"> {{ $errors->first('security_number') }}</label>
        @endif
     </div>

</div>

<div class="form-group row">
    <div class="col-sm-6">
        {!! Form::label('file', 'Image', ['class' => 'col-sm-1 control-label no-padding-right is_required']); !!}
        <div class="col-sm-10">

            <input type="file" class="dropify form-control col-sm-10 required" name="file">
        </div>
        @if($errors->has('file'))
            <label class="has-error" for="file">{{ $errors->first('file') }}</label>
        @endif

    </div>


</div>

<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </div>
</div>
