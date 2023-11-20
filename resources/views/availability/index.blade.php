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
