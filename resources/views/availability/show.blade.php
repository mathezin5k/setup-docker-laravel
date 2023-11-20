<h1>Detalhes da Disponibilidade</h1>
<p>Dia: {{ $availability->day }}</p>
<p>Hora de Início: {{ $availability->start_time }}</p>
<p>Hora de Término: {{ $availability->end_time }}</p>
<a href="{{ route('availability.index') }}">Voltar para a lista</a>
