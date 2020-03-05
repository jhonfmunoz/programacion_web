<!-- Id Departamento Field -->
<div class="form-group">
    {!! Form::label('id_departamento', 'Id Departamento:') !!}
    <p>{{ $departamentos->id_departamento }}</p>
</div>

<!-- Nombre Departamento Field -->
<div class="form-group">
    {!! Form::label('nombre_departamento', 'Nombre Departamento:') !!}
    <p>{{ $departamentos->nombre_departamento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departamentos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departamentos->updated_at }}</p>
</div>

