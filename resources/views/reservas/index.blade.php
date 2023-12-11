<style>
    .container {
    margin: auto;
    width: 50%;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 20px;
}

.card-body {
    padding: 2px 16px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    margin-bottom: 10px;
}

.btn-primary {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

</style>

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
