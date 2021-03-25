
<div class="form-group  row">
    <label class="col-sm-1 col-form-label">Province</label>

    <div class="col-sm-3">
        {{ Form::select('province', config('neputer.province'), null , ['class'=>'form-control']) }}
    </div>


    <label class="col-sm-1 col-form-label">Name</label>
    <div class="col-sm-3">
        {{ Form::text('name', null , ['class'=>'form-control']) }}
    </div>


</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </div>
</div>
