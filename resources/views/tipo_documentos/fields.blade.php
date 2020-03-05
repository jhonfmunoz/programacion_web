<!-- Tipo Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_documento', 'Tipo Documento:') !!}
    {!! Form::text('tipo_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoDocumentos.index') }}" class="btn btn-default">Cancel</a>
</div>
