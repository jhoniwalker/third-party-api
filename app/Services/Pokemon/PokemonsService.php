<?php
namespace App\Services\Pokemon;
use Exception;

class PokemonsService extends HttpClientPokemonService
{    
    /**
     * getAll
     *
     */
    public function getAll()
    {
        try { 

           return $this->httpClient->request('GET', 'pokemon'); 
           
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
        
        $uri = "pokemon/{$idOrName}";
        
        try { 

            return $this->httpClient->request('GET', $uri); 
           
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()]);

        }
    }
}
