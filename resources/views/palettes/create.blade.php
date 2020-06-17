@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Palette
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'palettes.store', 'files' => true]) !!}

                        @include('palettes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
