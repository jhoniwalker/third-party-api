<?php
namespace App\Services\Pokemon;
use GuzzleHttp\Client;
use App\Contracts\HttpClientInterface;

class CurlClientPokemonService implements HttpClientInterface
{    
    CONST BASE_URI = 'https://pokeapi.co/api/v2/';

    private $curlClient;

    public function __construct()
    {
        $this->curlClient = curl_init();
        // Configurar opciones específicas para cURL, si es necesario
        curl_setopt($this->curlClient, CURLOPT_RETURNTRANSFER, true);
    }
            
        
    /**
     * request
     *
     * @param  string $method
     * @param  string $uri
     * @param  array $options
     */
    
    public function request($method, $uri, $options = [])
    {
        $uri = self::BASE_URI . $uri;

        curl_setopt($this->curlClient, CURLOPT_URL, $uri);

        if ($method === 'POST') {
            curl_setopt($this->curlClient, CURLOPT_POST, true);
            curl_setopt($this->curlClient, CURLOPT_POSTFIELDS, http_build_query($data));
        }

        $response = curl_exec($this->curlClient);

        if ($response === false) {
            throw new \Exception(curl_error($this->curlClient));
        }

        $httpStatusCode = curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        if ($httpStatusCode == 200) {

            return json_decode($response);
            
        }

        return response()->json(['Status code' => $httpStatusCode]);
    }

}