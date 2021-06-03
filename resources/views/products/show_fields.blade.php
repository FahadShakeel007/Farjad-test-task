<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Model No Field -->
<div class="col-sm-12">
    {!! Form::label('model_no', 'Model No:') !!}
    <p>{{ $product->model_no }}</p>
</div>

<!-- Brand Id Field -->
<div class="col-sm-12">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    <p>{{ $product->brand_id }}</p>
</div>

