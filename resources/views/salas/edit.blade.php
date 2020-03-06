@extends('adminlte::page')

@section('title', 'Editar detalhes da sala')

@section('content_header')
    <h1>Editar detalhes da sala "{{ $sala->nome }}"</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="/salas/{{ $sala->id }}" method="POST">
                @CSRF
                @method('PATCH')
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $sala->nome }}">
                </p>
                
                <p>
                    <label for="qtdAlunos">Quantidade alunos:</label>
                    <input type="text" name="qtdAlunos" value="{{ $sala->qtdAlunos }}">
                </p>
                
                <button type="submit" class="btn btn-primary">Editar sala</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
