<div class="row">
    <div class="col-12">
        <h1>Salas</h1>
        <p><a href="salas/create">Adicionar nova sala</a></p>
    </div>
</div>

<h3>Lista de salas - {{count($salas)}}</h3>

<table>

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