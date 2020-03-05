@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Municipios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($municipios, ['route' => ['municipios.update', $municipios->id], 'method' => 'patch']) !!}

                        @include('municipios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection