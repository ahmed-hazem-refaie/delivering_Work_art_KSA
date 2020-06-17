@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Appliedartist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($appliedartist, ['route' => ['appliedartists.update', $appliedartist->id], 'method' => 'patch']) !!}

                        @include('appliedartists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection