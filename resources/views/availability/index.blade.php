
<style>
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
        padding-top: 100px;
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
        background-color: purple;
    }

    header .navbar a:hover {
        color: yellow;
    }
    h1 {
    text-align: center;
    color: #333;
    font-size: 2em;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    display: inline-block;
    margin: 5px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
}

a:hover {
    background-color: #45a049;
}

form {
    display: inline-block;
}

button {
    background-color: #f44336;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

button:hover {
    background-color: #d32f2f;
}

</style>

<header>
    <a href="{{ url('/')}}">
        <div class="logo">Zé Mania<span>.</span></div>
    </a>
    <nav class="navbar">
        <a href="{{ url('cardapio')}}">menu</a>
        <a href="{{ url('reservas')}}">reserva</a>
        <a href='#'>agenda</a>
    </nav>
</header>

<h1>Agenda de Disponibilidade</h1>
<table>
    <tr>
        <th>Dia</th>
        <th>Hora de Início</th>
        <th>Hora de Término</th>
        <th>Ações</th>
    </tr>
    @foreach ($availabilities as $availability)
    <tr>
        <td>{{ $availability->day }}</td>
        <td>{{ $availability->start_time }}</td>
        <td>{{ $availability->end_time }}</td>
        <td>
            <a href="{{ route('availability.show', $availability) }}">Ver</a>
            <a href="{{ route('availability.edit', $availability) }}">Editar</a>
            <form action="{{ route('availability.destroy', $availability) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ route('availability.create') }}">Adicionar Disponibilidade</a>

