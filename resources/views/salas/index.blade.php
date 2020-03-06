@extends('adminlte::page')

@section('title', 'Lista de salas')

@section('content_header')
    <h1>
        Salas - Qtde: {{count($salas)}}
        <a href="salas/create" class="btn btn-warning">Adicionar nova sala</a>
    </h1>
@stop

@section('content')
    <table class="table table-bordered table-hover">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade alunos</td>
        </tr>
        
        @forelse($salas as $s)
        
            <tr>
                
                <td> {{ $s->id }} </td>
                <td><a href="/salas/{{ $s->id }}"> {{ $s->nome }} </a></td>
                <td> {{ $s->qtdAlunos }} </td>
                
            </tr>
        
        @empty
            Não há salas
        @endforelse
    
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
