<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{{ route('departamentos.index') }}"><i class="fa fa-edit"></i><span>Departamentos</span></a>
</li>

<li class="{{ Request::is('tipoDocumentos*') ? 'active' : '' }}">
    <a href="{{ route('tipoDocumentos.index') }}"><i class="fa fa-edit"></i><span>Tipo Documentos</span></a>
</li>

<li class="{{ Request::is('municipios*') ? 'active' : '' }}">
    <a href="{{ route('municipios.index') }}"><i class="fa fa-edit"></i><span>Municipios</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{{ route('personas.index') }}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

