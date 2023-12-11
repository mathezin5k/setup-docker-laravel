<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reservas</div>

                <div class="card-body">
                    @foreach ($reservations as $reservation)
                        <div class="reservation">
                            <h2>Aniversariante: {{ $reservation->birthday_person }}</h2>
                            <p>Idade: {{ $reservation->age }}</p>
                            <p>Convidados estimados: {{ $reservation->estimated_guests }}</p>
                            <p>Status: 
                                @if ($reservation->status == 0)
                                    Pendente
                                @elseif ($reservation->status == 1)
                                    Aprovado
                                @else
                                    Negado
                                @endif
                            </p>
                            <p>Cardápio: {{ $reservation->cardapio->nome }}</p>
                            <p>Data: {{ $reservation->availability->day }}</p>
                            <a href="{{ route('reservas.edit', $reservation) }}">Editar</a>
                            <form action="{{ route('reservas.destroy', $reservation) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esta reserva?')">Excluir</button>
                            </form>                                                  
                        </div>
                    @endforeach
                    <p><a href="{{ route('reservas.create') }}" class="btn btn-primary">Criar Reserva</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
