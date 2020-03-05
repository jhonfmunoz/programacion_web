<!-- Nombre Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_municipio', 'Nombre Municipio:') !!}
    {!! Form::text('nombre_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Dep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_dep', 'Id Dep:') !!}
    {!! Form::text('id_dep', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('municipios.index') }}" class="btn btn-default">Cancel</a>
</div>
