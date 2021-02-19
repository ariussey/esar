@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Mostrar lista de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

    @endif

    <div class="card">
        
            @can('admin.tags.create')
               <div class="card-header">
                    <a class="btn btn-success btn-sm" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>
                </div>
            @endcan
        

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td><small class="bg-{{$tag->color}} text-white rounded-lg p-1"><b>{{$tag->color}}</b></small></td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop