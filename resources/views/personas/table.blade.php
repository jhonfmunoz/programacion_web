<div class="table-responsive">
    <table class="table" id="personas-table">
        <thead>
            <tr>
                <th>Numero Identificacion</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fk Municipio</th>
        <th>Fk Td</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $personas)
            <tr>
                <td>{{ $personas->numero_identificacion }}</td>
            <td>{{ $personas->nombre }}</td>
            <td>{{ $personas->apellido }}</td>
            <td>{{ $personas->fk_municipio }}</td>
            <td>{{ $personas->fk_td }}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $personas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('personas.show', [$personas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('personas.edit', [$personas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
