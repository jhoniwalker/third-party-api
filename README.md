## THIRD PARTY API
Implementación para conexión a API de terceros (pokemon) con Guzzle o Curl impelmentado en Laravel 8 utilizando el principio de inversión de dependencia (DIP). 

### Pasos
Se define el contrato o interfaz HttpClientInterface.
Luego las clases concretas que la implementan: GuzzleClientPokemonService y CurlClientPokemonService.
Se crea la clase abstacta HttpClientPokemonService que utiliza inyección de dependencia a través del contructor, que recibirá una instancia de GuzzleClientPokemonService y CurlClientPokemonService.
Por último se implementan todos los servicios posibles que ofrece la API de Pokemon. Estos servicios heredarán de HttpClientPokemonService



