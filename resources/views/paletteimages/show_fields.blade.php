<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $paletteimage->img }}</p>
</div>

<!-- Palatte Id Field -->
<div class="form-group">
    {!! Form::label('palatte_id', 'Palatte Id:') !!}
    <p>{{ $paletteimage->palatte_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $paletteimage->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $paletteimage->updated_at }}</p>
</div>

