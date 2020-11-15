<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

//var_dump(openssl_get_cert_locations());

//url
$url = 'https://www.worldometers.info/coronavirus/';

//go get the data from url
$client = new \GuzzleHttp\Client(['verify' => false]);
$response = $client->request('GET', $url);
$html = ''.$response->getBody();

$crawler = new Crawler($html);

//loop through the data
$row = 1;
$nodeValues = $crawler->filter('#main_table_countries_today > tbody > tr')->each(function (Crawler $node, $i) {

    //search for values the I want
    echo $node->html();
    echo '<br><br>';

});