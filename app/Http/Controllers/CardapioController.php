<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
class CardapioController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
        $this->middleware('checkRole:comercial', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('cardapio.index', compact('cardapios'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cardapio.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $cardapio = new Cardapio($request->all());
        $cardapio->save();
    
        return redirect()->route('cardapio.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cardapio = Cardapio::findOrFail($id);
        return view('cardapio.show', compact('cardapio'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cardapio = Cardapio::findOrFail($id);
        return view('cardapio.edit', compact('cardapio'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->update($request->all());
    
        return redirect()->route('cardapio.index');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->delete();
    
        return redirect()->route('cardapio.index');
    }
}