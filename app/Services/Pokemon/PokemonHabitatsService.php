<?php
namespace App\Services\Pokemon;
use Exception;

class PokemonHabitatsService extends HttpClientPokemonService
{    
    /**
     * getAll
     *
     */
    public function getAll()
    {
        try { 

            return $this->httpClient->request('GET', 'pokemon-habitat');
           
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()]);
        }
    }
    
        
    /**
     * getOne
     *
     * @param  string  $idOrName
     */
    public function getOne(string $idOrName)
    {
        
        $uri = "pokemon-habitat/{$idOrName}";
        
        try { 

            return $this->httpClient->request('GET', $uri); 

           
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()]);

        }
    }
}
