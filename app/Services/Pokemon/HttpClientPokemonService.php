<?php
namespace App\Services\Pokemon;
use App\Contracts\HttpClientInterface;

abstract class HttpClientPokemonService
{
    protected $httpClient;
    
    /**
     * __construct
     *
     * @param  mixed $httpClient
     * @return void
     */
    public function __construct(HttpClientInterface $httpClient)
    {   
        $this->httpClient = $httpClient;
    }
    
    /**
     * getAll
     *
     * @return void
     */
    abstract public function getAll();
    
    /**
     * getOne
     *
     * @param  string $idOrName
     * @return void
     */
    abstract public function getOne(string $idOrName);
}
