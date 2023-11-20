<form action="/cardapio" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
    
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao"></textarea>
    
    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco">
    
    <label for="imagem">Imagem:</label>
    <input type="file" id="imagem" name="imagem">
    
    <input type="submit" value="Criar">
</form>
