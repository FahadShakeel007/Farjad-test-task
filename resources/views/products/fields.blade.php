<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 256,'maxlength' => 256]) !!}
</div>

<!-- Model No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_no', 'Model No:') !!}
    {!! Form::text('model_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
        {!! Form::label('brand_id', 'Brand') !!}
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
    </div>

