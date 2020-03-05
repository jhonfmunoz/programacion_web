@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Documentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoDocumentos, ['route' => ['tipoDocumentos.update', $tipoDocumentos->id], 'method' => 'patch']) !!}

                        @include('tipo_documentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection