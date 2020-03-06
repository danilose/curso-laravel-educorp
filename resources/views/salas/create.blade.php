@extends('adminlte::page')

@section('title', 'Adicionar sala')

@section('content_header')
    <h1>
        Adicionar sala
        <a href="/salas" class="btn btn-info">Voltar</a>
    </h1>
@stop

@section('content')
    <div class="row">
        <form action="/salas" method="post">
            @csrf

            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </p>

            <p>
                <label for="qtdAlunos">Quantidade alunos:</label>
                <input type="text" name="qtdAlunos">
            </p>
            
            <button type="submit" class="btn btn-success">Criar sala</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
