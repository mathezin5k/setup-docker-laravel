<!-- resources/views/reserva/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Reserva</h1>

    <form method="POST" action="{{ route('reserva.update', $reserva->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cardapio_id">Cardápio:</label>
            <select name="cardapio_id" id="cardapio_id" class="form-control">
                @foreach ($cardapios as $cardapio)
                    <option value="{{ $cardapio->id }}" {{ $reserva->cardapio_id == $cardapio->id ? 'selected' : '' }}>{{ $cardapio->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="availability_id">Disponibilidade:</label>
            <select name="availability_id" id="availability_id" class="form-control">
                @foreach ($availabilities as $availability)
                    <option value="{{ $availability->id }}" {{ $reserva->availability_id == $availability->id ? 'selected' : '' }}>{{ $availability->day }} - {{ $availability->start_time }} to {{ $availability->end_time }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nome_aniversariante">Nome do Aniversariante:</label>
            <input type="text" name="nome_aniversariante" id="nome_aniversariante" class="form-control" value="{{ $reserva->nome_aniversariante }}" required>
        </div>

        <div class="form-group">
            <label for="idade_aniversario">Idade do Aniversário:</label>
            <input type="number" name="idade_aniversario" id="idade_aniversario" class="form-control" value="{{ $reserva->idade_aniversario }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade_convidados">Quantidade de Convidados:</label>
            <input type="number" name="quantidade_convidados" id="quantidade_convidados" class="form-control" value="{{ $reserva->quantidade_convidados }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Reserva</button>
    </form>
@endsection
