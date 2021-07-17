<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_no', 'Vehicle No:') !!}
    {!! Form::text('vehicle_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_type', 'Vehicle Type:') !!}
    {!! Form::text('vehicle_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Driving License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('driving_license', 'Driving License:') !!}
    {!! Form::text('driving_license', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('drivers.index') }}" class="btn btn-light">Cancel</a>
</div>
