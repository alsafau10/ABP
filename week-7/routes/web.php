<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource("/pokemons", PokemonsController::class);