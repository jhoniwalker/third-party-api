<?php

namespace App\Http\Controllers\Pokemon;

use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Services\Pokemon\PokemonsService;
use App\Services\Pokemon\GuzzleClientPokemonService; 

class PokemonsController extends Controller
{    
        
    /**
     * index
     *
     */
    public function index()
    {
        $httpClient = new GuzzleClientPokemonService();

        $pokemonsService = new PokemonsService($httpClient);

        $pokemons = $pokemonsService->getAll();
    
        return $pokemons;
    }
    
    /**
     * show
     *
     * @param  string $idOrName
     */
    public function show($idOrName)
    {      

        $httpClient = new GuzzleClientPokemonService();

        $pokemonsService = new PokemonsService($httpClient);

        $pokemon = $pokemonsService->getOne($idOrName);

        return $pokemon;

    }

}
