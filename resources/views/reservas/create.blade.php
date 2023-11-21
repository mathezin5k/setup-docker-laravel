<!-- resources/views/reserva/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Criar Reserva</h1>

    <form method="POST" action="{{ route('reservas.store') }}">
        @csrf

        <div class="form-group">
            <label for="cardapio_id">Cardápio:</label>
            <select name="cardapio_id" id="cardapio_id" class="form-control">
                @foreach ($cardapios as $cardapio)
                    <option value="{{ $cardapio->id }}">{{ $cardapio->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="availability_id">Disponibilidade:</label>
            <select name="availability_id" id="availability_id" class="form-control">
                @foreach ($availabilities as $availability)
                    <option value="{{ $availability->id }}">{{ $availability->day }} - {{ $availability->start_time }} to {{ $availability->end_time }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nome_aniversariante">Nome do Aniversariante:</label>
            <input type="text" name="nome_aniversariante" id="nome_aniversariante" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="idade_aniversario">Idade do Aniversário:</label>
            <input type="number" name="idade_aniversario" id="idade_aniversario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantidade_convidados">Quantidade de Convidados:</label>
            <input type="number" name="quantidade_convidados" id="quantidade_convidados" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Criar Reserva</button>
    </form>
@endsection
