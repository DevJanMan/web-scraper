<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

var_dump(openssl_get_cert_locations());

//url
$url = 'https://www.worldometers.info/coronavirus/';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', $url);

echo $response->getBody();

//go get the data from url

//loop through the data

//search for values the I want

//