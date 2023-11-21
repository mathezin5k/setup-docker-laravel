<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Availability;
use App\Models\Cardapio;

class ReservaController extends Controller
{
    public function create()
    {
        $cardapios = Cardapio::all();
        $availabilities = Availability::all();

        return view('reserva.create', compact('cardapios', 'availabilities'));
    }

    public function store(Request $request)
{
    // Validação do request
    $request->validate([
        'cardapio_id' => 'required|exists:cardapio,id',
        'availability_id' => 'required|exists:availability,id|unique:reservas,availability_id,NULL,id,cardapio_id,' . $request->input('cardapio_id'),
        'nome_aniversariante' => 'required',
        'idade_aniversario' => 'required|integer',
        'quantidade_convidados' => 'required|integer',
    ]);

    Reserva::create($request->all());

    return redirect()->route('reservas.index');
}


public function index()
{
    $reservas = Reserva::all();
    return view('reservas.index', compact('reservas'));
}


    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $cardapios = Cardapio::all();
        $availabilities = Availability::all();

        return view('reservas.edit', compact('reserva', 'cardapios', 'availabilities'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cardapio_id' => 'required|exists:cardapio,id',
            'availability_id' => 'required|exists:availability,id',
            'nome_aniversariante' => 'required',
            'idade_aniversario' => 'required|integer',
            'quantidade_convidados' => 'required|integer',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());

        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return redirect()->route('reservas.index');
    }
}

