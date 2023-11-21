<!-- resources/views/reserva/index.blade.php -->

@extends('layouts.app')


@section('content')
    <h1>Lista de Reservas</h1>

    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Criar Reserva</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Aniversariante</th>
                <th>Idade Aniversário</th>
                <th>Quantidade Convidados</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->nome_aniversariante }}</td>
                    <td>{{ $reserva->idade_aniversario }}</td>
                    <td>{{ $reserva->quantidade_convidados }}</td>
                    <td>
                        <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <header>
        <a href="{{ url('/')}}">
            <div class="logo">Zé Mania<span>.</span></div>
        </a>
        <nav class="navbar">
            <a href="{{ url('cardapio')}}">menu</a>
            <a href="#">reserva</a>
            <a href="{{ url('availability')}}">agenda</a>
        </nav>
    </header>
@endsection
