<!-- Payload Field -->
<div class="form-group">
    {!! Form::label('payload', 'Payload:') !!}
    <p>{{ $truck->payload }}</p>
</div>

<!-- Cargobox Field -->
<div class="form-group">
    {!! Form::label('cargobox', 'Cargobox:') !!}
    <p>{{ $truck->cargobox }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $truck->type }}</p>
</div>

<!-- Driver Field -->
<div class="form-group">
    {!! Form::label('driver', 'Driver:') !!}
    <p>{{ $truck->driver }}</p>
</div>

<!-- Vehicle Field -->
<div class="form-group">
    {!! Form::label('vehicle', 'Vehicle:') !!}
    <p>{{ $truck->vehicle }}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $truck->images }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $truck->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $truck->updated_at }}</p>
</div>

