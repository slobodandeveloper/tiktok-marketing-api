<?php

namespace TikTokBusinessApi;

require './api/vendor/autoload.php';
require './src/TiktokAccountsAPIClient';



$access_token = '6ae3c193bd835cf37e0bee9ba8b23be25509c569';

$credentials = \TikTokBusinessApi\Credentials::fromAccessToken(
    $access_token
);

$httpClient = new \GuzzleHttp\Client();

$client = new TiktokMarketingAPIClient(
    $credentials,
    $httpClient
);

$advertiser_id = 7277402052215603202;

$resp = $client->campaign->get($advertiser_id);

print_r($resp);
