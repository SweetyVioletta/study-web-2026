<?php
require 'vendor/autoload.php';
require 'QuoteApi.php';

$api = new QuoteApi();

$quote = $api->getQuote();

?>

<p> <?=$quote['quote'] ?></p>
<p><em>- <?=$quote['author'] ?></em></p>
