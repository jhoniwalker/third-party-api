<?php

namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use App\Services\Pokemon\PokemonHabitatsService;
use App\Services\Pokemon\CurlClientPokemonService; 

class PokemonHabitatsController extends Controller
{    
    /**
     * index
     *
     */
    public function index()
    {
        $httpClient = new CurlClientPokemonService();

        $pokemonHabitatsService = new PokemonHabitatsService($httpClient);

        $pokemonHabitats = $pokemonHabitatsService->getAll();

        return $pokemonHabitats;
    }
    
    /**
     * show
     *
     * @param  string $idOrName
     */
    public function show($idOrName)
    {      

        $httpClient = new CurlClientPokemonService();

        $pokemonHabitatsService = new PokemonHabitatsService($httpClient);

        $pokemonHabitat = $pokemonHabitatsService->getOne($idOrName);

        $pokemonHabitat;

        return $pokemonHabitat;

    }

}
