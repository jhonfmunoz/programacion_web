<!-- Id Tipo Documento Field -->
<div class="form-group">
    {!! Form::label('id_tipo_documento', 'Id Tipo Documento:') !!}
    <p>{{ $tipoDocumentos->id_tipo_documento }}</p>
</div>

<!-- Tipo Documento Field -->
<div class="form-group">
    {!! Form::label('tipo_documento', 'Tipo Documento:') !!}
    <p>{{ $tipoDocumentos->tipo_documento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tipoDocumentos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tipoDocumentos->updated_at }}</p>
</div>

