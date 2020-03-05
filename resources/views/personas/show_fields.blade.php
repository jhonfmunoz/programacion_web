<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $personas->id }}</p>
</div>

<!-- Numero Identificacion Field -->
<div class="form-group">
    {!! Form::label('numero_identificacion', 'Numero Identificacion:') !!}
    <p>{{ $personas->numero_identificacion }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $personas->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $personas->apellido }}</p>
</div>

<!-- Fk Municipio Field -->
<div class="form-group">
    {!! Form::label('fk_municipio', 'Fk Municipio:') !!}
    <p>{{ $personas->fk_municipio }}</p>
</div>

<!-- Fk Td Field -->
<div class="form-group">
    {!! Form::label('fk_td', 'Fk Td:') !!}
    <p>{{ $personas->fk_td }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $personas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $personas->updated_at }}</p>
</div>

