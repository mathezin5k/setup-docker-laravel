<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;


class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $availabilities = Availability::all();
        return view('availability.index', compact('availabilities'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('availability.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $availability = Availability::create($request->all());
        return redirect()->route('availability.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $availability = Availability::findOrFail($id);
        return view('availability.show', compact('availability'));
    }
    
    public function edit($id)
    {
        $availability = Availability::findOrFail($id);
        return view('availability.edit', compact('availability'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $availability = Availability::findOrFail($id);
        $availability->update($request->all());
        return redirect()->route('availability.index');
    }
    
    public function destroy($id)
    {
        $availability = Availability::findOrFail($id);
        $availability->delete();
        return redirect()->route('availability.index');
    }
}
