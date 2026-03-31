<?php
require 'Factory.php';
class ClickApi
{
    private $client;

    public function __construct()
    {
        $this->client = Factory::make('http://clickhouse:8123/');
    }

    public function query($sql)
    {
        $response = $this->client->post('', [
            'body' => $sql
        ]);
        return $response->getBody()->getContents();
    }

}
