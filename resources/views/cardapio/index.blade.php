<ul>
    @foreach ($cardapios as $cardapio)
        <li>
            <h2>{{ $cardapio->nome }}</h2>
            <p>{{ $cardapio->descricao }}</p>
            <p>{{ $cardapio->preco }}</p>
            <img src="{{ asset('storage/imagens/' . $cardapio->imagem) }}" alt="{{ $cardapio->nome }}">
            <a href="/cardapio/{{ $cardapio->id }}/edit">Editar</a>
            <form action="/cardapio/{{ $cardapio->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Excluir">
            </form>
        </li>
    @endforeach
    </ul>
    <a href="{{route ('cardapio.create')}}">Criar</a>
    