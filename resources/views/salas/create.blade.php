<div class="row">
    <h1>Adicionar sala</h1>
</div>

<hr>

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
        
        <button type="submit">Criar sala</button>
    </form>
</div>
