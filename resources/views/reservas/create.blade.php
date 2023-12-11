<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar Reserva</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservas.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="cardapio_id">Cardápio</label>
                            <select id="cardapio_id" name="cardapio_id" class="form-control">
                                @foreach ($cardapios as $cardapio)
                                    <option value="{{ $cardapio->id }}">{{ $cardapio->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="availability_id">Data</label>
                            <select id="availability_id" name="availability_id" class="form-control">
                                @foreach ($availabilities as $availability)
                                    <option value="{{ $availability->id }}">{{ $availability->day }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthday_person">Nome do Aniversariante</label>
                            <input type="text" id="birthday_person" name="birthday_person" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="age">Idade</label>
                            <input type="number" id="age" name="age" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="estimated_guests">Convidados Estimados</label>
                            <input type="number" id="estimated_guests" name="estimated_guests" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Criar Reserva
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
