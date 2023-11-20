<h1>Adicionar Disponibilidade</h1>
<form action="{{ route('availability.store') }}" method="post">
    @csrf
    <p>
        <label for="day">Dia:</label>
        <input type="text" id="day" name="day">
    </p>
    <p>
        <label for="start_time">Hora de Início:</label>
        <input type="time" id="start_time" name="start_time">
    </p>
    <p>
        <label for="end_time">Hora de Término:</label>
        <input type="time" id="end_time" name="end_time">
    </p>
    <p>
        <button type="submit">Adicionar</button>
    </p>
</form>
