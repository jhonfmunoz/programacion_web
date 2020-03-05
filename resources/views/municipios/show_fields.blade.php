<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $municipios->id }}</p>
</div>

<!-- Nombre Municipio Field -->
<div class="form-group">
    {!! Form::label('nombre_municipio', 'Nombre Municipio:') !!}
    <p>{{ $municipios->nombre_municipio }}</p>
</div>

<!-- Id Dep Field -->
<div class="form-group">
    {!! Form::label('id_dep', 'Id Dep:') !!}
    <p>{{ $municipios->id_dep }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $municipios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $municipios->updated_at }}</p>
</div>

