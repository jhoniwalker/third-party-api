<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pokemon\PokemonsController;
use App\Http\Controllers\Pokemon\PokemonHabitatsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pokemons', [PokemonsController::class, 'index']);
Route::get('pokemons/{idorname}', [PokemonsController::class, 'show']);
Route::get('pokemon-habitats', [PokemonHabitatsController::class, 'index']);
Route::get('pokemon-habitats/{idorname}', [PokemonHabitatsController::class, 'show']);
