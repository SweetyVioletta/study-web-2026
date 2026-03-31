<?php
require 'vendor/autoload.php';

// https://dummyjson.com/quotes/random

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class QuoteApi
{
    private ClientInterface $client;
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://dummyjson.com/']);
    }

    public function getQuote(): array
    {
        $response = $this->client->get('quotes/random');

        return json_decode($response->getBody()->getContents(), true);
    }
}
