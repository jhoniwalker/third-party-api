<?php
namespace App\Services\Pokemon;
use GuzzleHttp\Client;
use App\Contracts\HttpClientInterface;

class GuzzleClientPokemonService implements HttpClientInterface
{    
    /**
     * client
     *
     * @var $client GuzzleHttp\Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/',
            'timeout'  => 2.0,
        ]);
    }
            
        
    /**
     * request
     *
     * @param  string $method
     * @param  string $uri
     * @param  array $options
     */
    public function request(string $method, string $uri, array $options = [])
    {
       $response = $this->client->request($method, $uri, $options);

        if ($response->getStatusCode() == 200) {

            $body = $response->getBody();

            $data = json_decode($body, true);

            return $data;
        }

        return response()->json(['Status code' => $response->getStatusCode()]);
    }

}