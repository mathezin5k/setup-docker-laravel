
<style>
    ul {
    list-style-type: none;
    padding: 0;
}
li {
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
}
h2 {
    margin: 0 0 10px;
    font-size: 20px;
}
p {
    margin: 0 0 10px;
}
img {
    max-width: 100%;
    height: auto;
}
a {
    display: inline-block;
    margin: 10px 0;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
}
form {
    display: inline-block;
}
input[type="submit"] {
    margin: 10px 0;
    padding: 10px 20px;
    background-color: #dc3545;
    color: #fff;
    border: none;
}

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 62.5%;
    }

    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        overflow-x: hidden;
        padding-top: 80px;
    }

    .logo a{
        text-decoration: none;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
        background-color: purple;
    }

    header .logo {
        font-size: 2.3rem;
        color: #fff;
        font-weight: bolder;
    }

    header .navbar {
        display: flex;
    }

    header .navbar a {
        font-size: 1.8rem;
        margin: 0 1.5rem;
        color: #fff;
        text-decoration: none;
        transition: color 0.2s linear;
    }

    header .navbar a:hover {
        color: yellow;
    }
            .icons .bnt {
        background-color: yellow;
        color: #000;
        padding: 0.9rem 3.5rem;
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: 3rem;
        text-decoration: none; /* Adicionado para remover o sublinhado */
        display: inline-block; /* Adicionado para ajustar a largura ao conteúdo */
    }

    .icons .bnt:hover {
        background-color: rgb(177, 177, 19);
    }
    header .logo a {
    text-decoration: none; 
    color: #fff;
    }
</style>

</head>

<body>
    <header>
        <a href="{{ url('/') }}">
            <div class="logo">Zé Mania<span>.</span></div>
        </a>
        <nav class="navbar">
            <a href="#">menu</a>
            <a href="{{ url('reservas')}}">reserva</a>
            <a href="{{ url('availability')}}">agenda</a>
        </nav>

    </header>
</body>
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
    