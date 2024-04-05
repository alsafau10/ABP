<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemons;

class PokemonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $pokemon;

    public function __construct(){
        $this->pokemon =  new Pokemons();
    }
    public function index()
    {
        $response['pokemons'] = $this->pokemon->all();
        return view('pages.index')->with($response);
    }


    public function store(Request $request)
    {
        $this->pokemon->create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $response['pokemon'] = $this->pokemon->find($id);
        return view('pages.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $pokemon = $this->pokemon->find($id);
        $pokemon->update(array_merge($pokemon->toArray(), $request->toArray()));
        return redirect('pokemons');
    }
    public function destroy(string $id)
    {
        $pokemon = $this->pokemon->find($id);
        $pokemon->delete();
        return redirect('pokemons');
    }
}
