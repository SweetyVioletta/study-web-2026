<?php
require 'vendor/autoload.php';
//require 'RedisApi.php';
require 'ClickApi.php';
//require 'ElasticApi.php';

//$redis = new RedisApi();
//
//$redis->setValue('fraemwork', 'predis');
//echo $redis->getValue('fraemwork');

$clickApi = new ClickApi();
$clickApi->query("CREATE TABLE IF NOT EXISTS  users (
    id UInt32,
    name String,
    age UInt8
) ENGINE = MergeTree()
ORDER BY id;");
echo $clickApi->query("INSERT INTO users (id, name, age) VALUES (1, 'Ivan', 25), (2, 'Maria', 30);");
var_dump($clickApi->query("SELECT * from users;"));
//var_dump($clickApi->query('SELECT * FROM system.tables'));

//// Elasticsearch
//$elastic = new ElasticApi();
//echo $elastic->indexDocument('books', 1, ['title' => '1984', 'author' => 'Orwell']);
//var_dump($elastic->search('books', ['author' => 'Orwell']));


