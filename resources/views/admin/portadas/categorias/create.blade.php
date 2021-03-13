@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Crear Categoría</h1>
@stop

@section('content')

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.portadas.categorias.store', 'autocomplete' => 'off']) !!}
            
                @include('admin.portadas.categorias.partials.form')

                {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary btn-sm']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection