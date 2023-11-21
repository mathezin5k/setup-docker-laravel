<!-- resources/views/reserva/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalhes da Reserva</h1>

    <p>ID: {{ $reserva->id }}</p>
    <p>Nome Aniversariante: {{ $reserva->nome_aniversariante }}</p>
    <p>Idade Aniversário: {{ $reserva->idade_aniversario }}</p>
    <p>Quantidade Convidados: {{ $reserva->quantidade_convidados }}</p>

    <p>Cardápio: {{ $reserva->cardapio->nome }}</p>
    <p>Disponibilidade: {{ $reserva->availability->day }} - {{ $reserva->availability->start_time }} to {{ $reserva->availability->end_time }}</p>
    
    <!-- Adicione mais informações da reserva conforme necessário -->

    <a href="{{ route('reserva.index') }}" class="btn btn-secondary">Voltar para Lista</a>
@endsection
