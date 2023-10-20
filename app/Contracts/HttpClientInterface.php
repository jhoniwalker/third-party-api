<?php

namespace App\Contracts;

interface HttpClientInterface
{
    public function request(string $method, string $uri, array $options);
}