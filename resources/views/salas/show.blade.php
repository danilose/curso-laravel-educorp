@extends('adminlte::page')

@section('title', 'Detalhes da sala')

@section('content_header')
    <form action="/salas/{{$sala->id}}" method="POST">
        @method('DELETE')
        @csrf
        <h1>
            Detalhes da sala "{{$sala->nome}}"
            <a href="/salas/{{$sala->id}}/edit" class="btn btn-primary">Editar sala</a>
            <button type="submit" class="btn btn-danger">Deletar sala</button>
            <a href="/salas" class="btn btn-info">Voltar</a>
        </h1>
    </form>
@stop

@section('content')

    <div class="row">
        <div class="col-12"><strong>Código </strong> {{$sala->id}}</div>
        <div class="col-12"><strong>Nome </strong> {{$sala->nome}}</div>
        <div class="col-12"><strong>Quantidade alunos </strong> {{$sala->qtdAlunos}}</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

