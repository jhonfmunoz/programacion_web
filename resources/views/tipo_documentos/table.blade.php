<div class="table-responsive">
    <table class="table" id="tipoDocumentos-table">
        <thead>
            <tr>
                <th>Tipo Documento</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoDocumentos as $tipoDocumentos)
            <tr>
                <td>{{ $tipoDocumentos->tipo_documento }}</td>
                <td>{{ $tipoDocumentos->id_dep }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoDocumentos.destroy', $tipoDocumentos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoDocumentos.show', [$tipoDocumentos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tipoDocumentos.edit', [$tipoDocumentos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
