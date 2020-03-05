<div class="table-responsive">
    <table class="table" id="municipios-table">
        <thead>
            <tr>
                <th>Nombre Municipio</th>
        <th>Id Dep</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($municipios as $municipios)
            <tr>
                <td>{{ $municipios->nombre_municipio }}</td>
            <td>{{ $municipios->id_dep }}</td>
                <td>
                    {!! Form::open(['route' => ['municipios.destroy', $municipios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('municipios.show', [$municipios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('municipios.edit', [$municipios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
