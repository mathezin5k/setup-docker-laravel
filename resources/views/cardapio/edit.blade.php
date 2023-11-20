<form action="/cardapio/{{ $cardapio->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $cardapio->nome }}">
    
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao">{{ $cardapio->descricao }}</textarea>
    
    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco" value="{{ $cardapio->preco }}">
    
    <label for="imagem">Imagem:</label>
    <input type="file" id="imagem" name="imagem">
    
    <input type="submit" value="Atualizar">
</form>
