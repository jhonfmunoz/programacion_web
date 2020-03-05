<!-- Numero Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_identificacion', 'Numero Identificacion:') !!}
    {!! Form::text('numero_identificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_municipio', 'Fk Municipio:') !!}
    {!! Form::text('fk_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Td Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_td', 'Fk Td:') !!}
    {!! Form::text('fk_td', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('personas.index') }}" class="btn btn-default">Cancel</a>
</div>
