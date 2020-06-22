@extends('layouts.app')

@section('content')

<!-- orginal -->
<section class="content-header">
    <h1>
        Paletteimage
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                
                {!! Form::open(['route' => 'paletteimages.store', 'files' => true]) !!}

                @include('paletteimages.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection