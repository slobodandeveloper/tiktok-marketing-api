<?php

require './api/vendor/autoload.php';

// $credentials = \Promopult\TikTokMarketingApi\Credentials::fromAccessToken(
//     getenv('__ACCESS_TOKEN__')
// );

$access_token = '6ae3c193bd835cf37e0bee9ba8b23be25509c569';

$credentials = \Promopult\TikTokMarketingApi\Credentials::fromAccessToken(
    $access_token
);

$httpClient = new \GuzzleHttp\Client();

$client = new \Promopult\TikTokMarketingApi\Client(
    $credentials,
    $httpClient
);

$resp = $client->bc->get();

print_r($resp);
