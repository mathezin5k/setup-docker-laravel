<form action="/cardapio" method="post" enctype="multipart/form-data">
    @csrf
    <p>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
    </p>

    <p>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>
    </p>

    <p>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco">    
    </p>

    <p>
        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem">
    </p>
    
    <p>
        <input type="submit" value="Criar">
    </p>
</form>
