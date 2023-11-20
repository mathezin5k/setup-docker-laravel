<h2>{{ $cardapio->nome }}</h2>
<p>{{ $cardapio->descricao }}</p>
<p>{{ $cardapio->preco }}</p>
<img src="{{ asset('storage/' . $cardapio->imagem) }}" alt="{{ $cardapio->nome }}">
