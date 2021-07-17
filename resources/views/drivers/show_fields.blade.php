<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $driver->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $driver->email }}</p>
</div>

<!-- Vehicle No Field -->
<div class="form-group">
    {!! Form::label('vehicle_no', 'Vehicle No:') !!}
    <p>{{ $driver->vehicle_no }}</p>
</div>

<!-- Vehicle Type Field -->
<div class="form-group">
    {!! Form::label('vehicle_type', 'Vehicle Type:') !!}
    <p>{{ $driver->vehicle_type }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $driver->address }}</p>
</div>

<!-- Driving License Field -->
<div class="form-group">
    {!! Form::label('driving_license', 'Driving License:') !!}
    <p>{{ $driver->driving_license }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $driver->image }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $driver->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $driver->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $driver->updated_at }}</p>
</div>

