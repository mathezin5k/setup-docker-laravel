<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
use App\Models\Availability;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservas.index', compact('reservations'));
    }

    public function create()
{
    $cardapios = Cardapio::all();
    $availabilities = Availability::all();
    return view('reservas.create', compact('cardapios', 'availabilities'));
}

    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation->cardapio_id = $request->cardapio_id;
        $reservation->availability_id = $request->availability_id;
        $reservation->birthday_person = $request->birthday_person;
        $reservation->age = $request->age;
        $reservation->estimated_guests = $request->estimated_guests;
        $reservation->save();

        return redirect()->route('reservas.index');
    }

    public function show(Reservation $reservation)
    {
        return view('reservas.show', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation, $id)
    {
        $status = $reservation->status == 1 ? 'Aprovado' : ($reservation->status == 2 ? 'Negado' : 'Pendente');
        $reservation = Reservation::find($id);
        $reservation->cardapio_id = $request->cardapio_id;
        $reservation->availability_id = $request->availability_id;
        $reservation->birthday_person = $request->birthday_person;
        $reservation->age = $request->age;
        $reservation->estimated_guests = $request->estimated_guests;
        $reservation->status = $request->status;
        $reservation->save();

        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
    
        return redirect()->route('reservas.index')->with('success', 'Reserva excluída com sucesso');
    }
    


    public function edit($id)
    {
        $reservation = Reservation::find($id);
        $cardapios = Cardapio::all(); // Busca todos os cardápios
        $availabilities = Availability::all(); // Busca todas as disponibilidades
        return view('reservas.edit', compact('reservation', 'cardapios', 'availabilities')); // Passa as variáveis para a view
    }
    
}
