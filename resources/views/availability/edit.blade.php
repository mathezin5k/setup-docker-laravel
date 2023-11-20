<h1>Editar Disponibilidade</h1>
<form action="{{ route('availability.update', $availability) }}" method="post">
    @csrf
    @method('PUT')
    <label for="day">Dia:</label>
    <input type="text" id="day" name="day" value="{{ $availability->day }}">
    <label for="start_time">Hora de Início:</label>
    <input type="time" id="start_time" name="start_time" value="{{ $availability->start_time }}">
    <label for="end_time">Hora de Término:</label>
    <input type="time" id="end_time" name="end_time" value="{{ $availability->end_time }}">
    <button type="submit">Salvar</button>
</form>
