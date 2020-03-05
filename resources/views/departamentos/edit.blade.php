@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Departamentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($departamentos, ['route' => ['departamentos.update', $departamentos->id], 'method' => 'patch']) !!}

                        @include('departamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection